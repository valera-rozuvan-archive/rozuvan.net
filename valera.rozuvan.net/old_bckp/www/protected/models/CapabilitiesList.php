<?

class CapabilitiesList
{
    static public function getCapabilities($id)
    {
        $capabilities = array(
            'web_development'    => array(),
            'java'               => array(),
            'android_and_mobile' => array(),
            'design'             => array(),
            'project_management' => array(),
        );

        if (isset($capabilities[$id]) === false) {
            return null;
        }

        $list = array(
            array(
                'title'   => 'Web Development',
                'url'     => 'web_development',
                'content' => ''
            ),
            array(
                'title'   => 'Java',
                'url'     => 'java',
                'content' => ''
            ),
            array(
                'title'   => 'Android & Mobile',
                'url'     => 'android_and_mobile',
                'content' => ''
            ),
            array(
                'title'   => 'Design',
                'url'     => 'design',
                'content' => ''
            ),
            array(
                'title'   => 'Project Management',
                'url'     => 'project_management',
                'content' => ''
            ),
        );

        $c1 = 0;
        foreach ($list as $key => $item) {
            if ($item['url'] === $id) {
                $list[$key]['isActive'] = 'active';
                $activeIndex = $c1;
            } else {
                $list[$key]['isActive'] = '';
            }

            $list[$key]['url'] = 'capabilities/'.$list[$key]['url'];

            $c1 += 1;
        }

        return array(
            'capabilities' => $capabilities,
            'list'         => $list,
            'activeIndex'  => $activeIndex
        );
    }
}
