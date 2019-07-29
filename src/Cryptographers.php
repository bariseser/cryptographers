<?php

namespace Bariseser;

/**
 * Class Cryptographers
 *
 * @author  Baris Eser <bariseser@gmail.com>
 */
class Cryptographers
{

    /**
     * @var string
     */
    public static $chipper = "aes-256-ctr";

    /**
     * @var string
     */
    public static $alphabet = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    /**
     * @var string
     */
    public static $salt = "";

    /**
     * Create Encrypted Data
     *
     * @param string $data
     * @return string
     */
    public static function encrypt(string $data): string
    {
        if (strlen($data) == 0) {
            throw new \RuntimeException("Data cannot be empty");
        }

        $iv = self::getRandomByte();
        return $iv . "." . openssl_encrypt($data, self::$chipper, self::getSalt(), $options = 0, $iv);
    }

    /**
     * @param string $data
     * @return string
     */
    public static function decrypt(string $data) :string
    {
        if (strlen($data) == 0) {
            throw new \InvalidArgumentException("Data cannot be empty");
        }

        return openssl_decrypt(self::getEncryptedData($data)[1], self::$chipper, self::getSalt(), $options = 0, self::getEncryptedData($data)[0]);
    }

    /**
     * @param string $chipper
     */
    public static function setChipper($chipper)
    {
        if (in_array($chipper, self::getCipherMethods())) {
            self::$chipper = $chipper;
        }
    }

    /**
     * @return array
     */
    public static function getCipherMethods(): array
    {
        return openssl_get_cipher_methods();
    }

    /**
     * @param  int $byte
     * @return string
     */
    public static function getRandomByte(): string
    {
        return substr(str_shuffle(self::$alphabet), 0, self::chipperLength());
    }

    /**
     * @param  int $byte
     * @return string
     */
    public static function chipperLength(): int
    {
        return openssl_cipher_iv_length(self::$chipper);
    }

    /**
     * @param string $alphabet
     */
    public static function setAlphabet(string $alphabet): void
    {
        self::$alphabet = $alphabet;
    }


    /**
     * @param  string $data
     * @return array
     */
    private static function getEncryptedData(string $data): array
    {
        return explode(".", $data);
    }

    /**
     * @return string
     */
    public static function getSalt(): string
    {
        return self::$salt;
    }

    /**
     * @param string $salt
     */
    public static function setSalt(string $salt): void
    {
        self::$salt = $salt;
    }

}
