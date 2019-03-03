<?php

namespace dz5;

class view
{
    private $_templatePath;
    /** @var \Twig\Environment */
    private $_twig;

    private $_data = [];

    public function __construct($path = '')
    {
        $this->_templatePath = $path;
    }

    public function getTwig()
    {
        if (!$this->_twig) {
            $path = trim('Twig/' . $this->_templatePath, DIRECTORY_SEPARATOR);
            $loader = new \Twig\Loader\FilesystemLoader($path);
            $this->_twig = new \Twig\Environment(
                $loader,
                ['cache' => $path . '_cache']
            );
        }

        return $this->_twig;
    }

    public function render($tplName = '', $data)
    {
        $this->_data = $data;
        $twig = $this->getTwig();

        ob_start(null, null, PHP_OUTPUT_HANDLER_STDFLAGS);
        try {
            echo $twig->render($tplName . '.twig', ['users' => $this->_data]);
        } catch (\Exception $e) {
            trigger_error($e->getMessage());
        }
        return ob_get_clean();
    }


}