<?php

class pocketapps_language {
    private $language;

    public function __construct($language) {
        $this->language = $language;
    }

    public function get_language($key, $language) {
        $key = str_replace(" ", "_", strtoupper($key));
        $dir = dirname(__FILE__) . "/". $language . "/";
        $file = $dir . "language-" . $language . ".json";
        if (!is_dir($dir)) {
            mkdir($dir);
        }

        $json = json_decode(file_get_contents($file), true);
        if (!empty($json[$key])) {
            return $json[$key];
        } else {
            $json[$key] = "[POCKETAPPS_UNDEFINED_LANGUAGE_ITEM]";
            file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT));
            return $json[$key];
        }
    }

    public function get($key) {
        return $this->get_language($key, $this->language);
    }
}