<?php

class CaptchaComponent extends Component
{
    public $characters = array();
    public $numCharacters = 6;
    public $captchaError ="";

    public function initialize(Controller $controller)
    {
        $this->characters = array_merge(range('0', '9'));
    }

    public function getCaptcha()
    {
        $result = array();
        shuffle($this->characters);
        for ($i = 0; $i < $this->numCharacters; $i++) {
            $result[] = $this->characters[$i];
        }
        return $result;
    }

    public function verify($input,$req)
    {
        $captchaError = "";
        if (!empty($input)) {

            if ($input == $req) {
                $result = 1;
                $captchaError = "";
            } else {
                $result = 0;
                $captchaError = "Wrong Captcha submitted";
            }
        } else {
            $result = 0;
            $captchaError = "Empty Captcha submitted";
        }
        return array ($result, $captchaError);
    }
}