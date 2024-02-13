<?php

    function image($src, $class = null) {
        global $path;
        echo '<img class="'.$class.'" src="'.$path.'files/images/'.$src.'">';
    }

    function logo($src, $class = null) {
        global $path;
        echo '<img class="'.$class.'" src="'.$path.'files/logos/'.$src.'">';
    }

    function button($target, $text, $class = null, $outsideLink = null) {
        if ($outsideLink == false) {
            global $path;
            echo '<a href="'.$path.$target.'" class="'.$class.'">'.$text.'</a>';
        } else {
            echo '<a href="'.$target.'" target="_blank" class="'.$class.'"><h3>'.$text.'</h3></a>';
        }
    }

    function script($src) {
        global $path;
        echo '<script src="'.$path.'files/scripts/'.$src.'"></script>';
    }

    function map($url) {
        echo '<iframe width="100%" height="100%" frameborder="0" src="'.$url.'"></iframe>';
    }







    function getByID($array, $id) {
        $return = "unknown";
        foreach($array AS $index => $element) {
            if($element['id'] == $id) {
                return $element;
            }
        }
        return $return;
    }

    function da_dump($variable, $print_r = false) {
        if ($print_r == true) {
            echo '<pre>';
            print_r($variable);
            echo '</pre>';
        } else {
            echo '<pre>';
            var_dump($variable);
            echo '</pre>';
        }
    }


    function get_block($id = null, $block_name = null) {
        global $path;
        global $page;

        $json = json_decode(file_get_contents($path."files/lang/nl.json"), true);

        if ($id != null) {
            foreach ($json[$page['name']] as $key => $value) {
                if ($value['id'] == $id) {
                    return replace_nline($value['content']);
                }
            }
        }
        if ($block_name != null) {
            foreach ($json[$page['name']] as $key => $value) {
                if ($value['block_name'] == $block_name) {
                    return replace_nline($value['content']);
                }
            }
        }
    }

    function replace_nline($content) {
        foreach ($content as $key => $value) {
            if ($key != "buttons") { $content[$key] = str_replace('\n','<br>', $value); }
        }
        return $content;
    }


    function get_page_title($sep = null) {
        global $page;
        global $site;

        if ($sep == null) {
            $sep = "|";
        }

        $page_name = ucfirst($page['name']);
        $site_name = $site['name'];

        if (str_contains($page_name, '-')) { $page_name = str_replace('-',' ', $page_name); }

        return '<title>' . $page_name . ' '. $sep .' ' . $site_name . '</title>';

    }

?>