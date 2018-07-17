<?php

namespace DangerousUsernames;

class DangerousUsernames extends \ArrayObject
{
    /**
     * Dangerous Usernames Constructor
     *
     * @param string|null  Path to file (NULL to use default file)
     */
    public function __construct($path = null)
    {
        if (! $path) {
            $path = __DIR__ . '/../dangerous_usernames.txt';
        }
    
        if (! is_readable($path)) {
            throw new \RuntimeException("Cannot read source file path: " . $path);
        }
        
        parent::__construct(array_filter(array_map('trim', file($path))));
    }
    
    /**
     * Is an item in the list?
     *
     * @param bool $caseSensitive
     * @param string $str
     * @return bool
     */
    public function inList($str, $caseSensitive = false)
    {
        if (! $caseSensitive) {
            return in_array(strtolower($str), array_map('strtolower', $this->getArrayCopy()));
        } else {
            return in_array($str, $this->getArrayCopy());
        }
    }
}
