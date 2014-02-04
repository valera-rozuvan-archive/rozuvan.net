<? $this->pageTitle = Yii::app()->name; ?>

<div class="cont-top">
    <div class="container">
        <div class="line-top"></div>

        <div class="row">
            <article class="span12">
                <h3>Get in Touch</h3>

                <form id="contact-form">
                    <div class="success"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                    <fieldset>
                        <div>
                            <label class="name">
                                <input type="text" placeholder="Name:">
                                <br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div>
                            <label class="email">
                                <input type="email" placeholder="Email:">
                                <br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div>
                            <label class="phone">
                                <input type="tel" placeholder="Phone:">
                                <br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div>
                            <label class="message">
                                <textarea placeholder="Message:"></textarea>
                                <br>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                        </div>
                        <div class="buttons-wrapper"><a class="btn btn-1" data-type="reset">clear</a><a class="btn btn-1" data-type="submit">submit</a></div>
                    </fieldset>
                </form>
            </article>
        </div>

    </div>
</div>