<?php

class pocketapps_language {
    private $language;

    public function __construct($language) {
        $this->language = $language;
    }

    public function get($key, $untranslatable = false) {
        return $this->get_language($key, $untranslatable);
    }

    private function get_language($key, $untranslatable = false) {
        $key = str_replace(" ", "_", strtoupper($key));

        if ($untranslatable) {
            $dir = dirname(__FILE__) . "/strings/core/";
            $file = $dir . "core.json";
        } else {
            $dir = dirname(__FILE__) . "/strings/". $this->language . "/";
            $file = $dir . "language-" . $this->language . ".json";
        }

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
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
}