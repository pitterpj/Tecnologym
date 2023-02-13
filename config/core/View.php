<!-- Pedro.J (Pitter) -->
<!-- https://github.com/pitterpj -->

<?php

class View
{

    //****  Properties ****//
    protected $template;
    protected $view;
    protected $params;

    public function __construct($view, $params = array())
    {
        $this->view = $view;
        $this->params = $params;
        $this->render(); // Display the view
    }

    //****  Methods ****//
    protected function render()
    {
        $this->template = $this->getContentTemplate($this->view);
        echo $this->template;
    }

    protected function getContentTemplate($file)
    {
        $filePath = ROOT . PATH_VIEWS . $file . ".php";

        if (is_file($filePath)) {
            // Extract parameters and create variables
            extract($this->params);

            // Buffer
            ob_start(); // Start Buffer
            require $filePath; // Set the view in the buffer
            $template = ob_get_contents(); // Get the buffer
            ob_end_clean(); // Finish and clean the buffer
            return $template;
        } else {
            throw new Exception("Error, view does not exist " . $filePath);
        }
    }
} //End class View
?>