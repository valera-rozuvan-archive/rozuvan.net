<?php

class SiteController extends Controller
{

    public function actions()
    {
        return array(
            'captcha' => array(
                'class'     => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    public function isActive($action)
    {
        if ((Yii::app()->controller->id == 'site') && (Yii::app()->controller->action->id == $action)) {
            return 'active';
        }

        return '';
    }

    public function actionIndex()
    {
        $this->render(Yii::app()->language.'/index', array());
    }

    public function actionAbout()
    {
        $this->render(Yii::app()->language.'/about', array());
    }

    public function actionProjects()
    {

        $this->render(
            Yii::app()->language.'/projects',
            array(
                'projects' => ProjectsList::getProjects(),
            )
        );
    }

    public function actionCapabilities($id)
    {
        $content = CapabilitiesList::getCapabilities($id);

        if ($content === null) {
            throw new CHttpException(404, 'The specified page cannot be found.');
        }

        $this->render(
            Yii::app()->language.'/capabilities',
            array(
                'content' => $content
            )
        );
    }

    public function actionPrivacy_policy()
    {
        $this->render(Yii::app()->language.'/privacy_policy', array());
    }

    public function actionHelp()
    {
        $this->render(Yii::app()->language.'/help', array());
    }

    public function actionSite_map()
    {
        $this->render(Yii::app()->language.'/site_map', array());
    }

    public function actionFaq()
    {
        $this->render(Yii::app()->language.'/faq', array());
    }

    public function actionContacts()
    {
        $this->render(Yii::app()->language.'/contacts', array());
    }

    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    // Must redo for the new 'constacts' action.
    /*
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body."\r\n\r\n----------------\r\nThis message was sent by the contact form on\r\nhttp://example.com", $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }
    */

    public function actionLogin()
    {
        $model = new SimpleRbacLoginForm();

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['SimpleRbacLoginForm'])) {
            $model->attributes = $_POST['SimpleRbacLoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model'=> $model));
    }

    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
}
