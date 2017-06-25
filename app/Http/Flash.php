<?php

namespace App\Http;

class Flash {

    /**
     * Flash API create flash method assigns the title, message and levels dynamically
     *
     * @param $title
     * @param $message
     * @param $level
     * @param string $key
     * @return mixed
     */
    public function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level

        ]);

    }

    /**
     * Info message is passed to the create method above.
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');

    }

    /**
     * Success method passes the success title and message to the create method.
     *
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }


    /**
     * Error method passes the error to the create method lsited above.
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * Passes a flash overlay message to the flash API.
     *
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function overlay($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }


}

