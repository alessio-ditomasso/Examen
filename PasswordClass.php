<?php


class PasswordClass
{
    /**
     * PasswordClass constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param $message
     * @return bool
     */
    public function checkAllSpecification($message): bool
    {
        if (!$this->checkNumberInString($message)) return false;

        if (!$this->checkSpecialChar($message)) return false;

        if (!$this->checkLength($message)) return false;

        return true;
    }

    /**
     * @param $message
     * @return bool
     */
    public function checkNumberInString($message): bool
    {
        // preg_match test if à pattern is contained in a String
        return preg_match('~[0-9]+~', $message);
    }

    /**
     * @param $message
     * @return bool
     */
    public function checkSpecialChar($message): bool
    {
        return preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $message);
    }

    /**
     * @param $message
     * @return bool
     */
    public function checkLength($message): bool
    {
        // strlen return the length of the string in parameter
        return strlen($message) >= 8;
    }
}