<?php
/**
 * Global functions.
 *
 * Keep this to an absolute minimum. Any functions used
 * here should be truly global, side-effect free, and not depend on
 * any library code. Its usage must be in hundreds
 * of places, this is not the place for it.
 */

 /**
 * Return the value at $offset in $array if set, or $default if not.
 *
 * @param mixed $array   Array to inspect.
 * @param mixed $offset  Offset into $array.
 * @param mixed $default Value to return if $array[$offset] is not set.
 *
 * @return mixed $array[$offset] or $default
 */
function ifseta($array, $offset, $default = null) {
    return is_array($array) && isset($array[$offset]) ? $array[$offset] : $default;
}

/**
 * Return the value of a property in an object if set, or $default if not.
 *
 * @param object $object   Object to inspect.
 * @param mixed  $property Property on $object.
 * @param mixed  $default  Value to return if $object->$property is not set.
 *
 * @return mixed $array[$offset] or $default
 */
function ifseto($object, $property, $default = null) {
    return isset($object->$property) ? $object->$property : $default;
}

/**
 * Method validates given string against cross site scripting (xss attack).
 *
 * @param mixed $string String to validate.
 *
 * @return mixed
 */
function sanitizeUserInput($data = null) {
    if (is_array($data)) {
        $temp = array();
        foreach($data as $key => $value) {
            $temp[$key] = sanitizeUserInput($value);
        }
        return $temp;
    } else {
        $data = trim($data);
        return htmlentities($data, ENT_QUOTES | ENT_IGNORE, 'UTF-8');
    }
}

/**
 * It converts end of line chars to <br> tag.
 *
 * @param string $string String to process.
 *
 * @return string
 */
function eolToBr($string) {
    return str_replace(PHP_EOL, "<br>", $string);
}

/**
 * It converts <br> tag to end of line character.
 *
 * @param string $string String to process.
 *
 * @return string
 */
function brToEol($string) {
    return str_replace('<br>', PHP_EOL,  $string);
}

/**
 * Convert arry key from underscored to lower-camelcase
 * e.g. 'this_method_name' -> 'thisMethodName'
 */
function uToC(array $arg) {
    foreach ($arg as $key => $value) {
        $newKey =  preg_replace('/_(.?)/e',"strtoupper('$1')",$key);
        $changed[$newKey] = $value;
    }
    return $changed;
}

function pre($var, $exit = true) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    if ($exit) {
        exit;
    }
}

function apiOk($payLoad) {
    header('Content-Type: application/json');
    echo json_encode($payLoad, true);
}

function now() {
    return date('Y-m-d H:i:s');
}