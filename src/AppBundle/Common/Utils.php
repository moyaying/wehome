<?php
/**
 * Created by IntelliJ IDEA.
 * User: moo
 * Date: 16/5/4
 * Time: 下午10:56
 */

namespace AppBundle\Common;


use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Utils
{
    private static $serializer = null;

    public static function json_instance($instance)
    {
        if (!self::$serializer) {
            $normalizer = new ObjectNormalizer();
            $encoder = new JsonEncoder();
            self::$serializer = new Serializer(array($normalizer), array($encoder));
        }
        return self::$serializer->serialize($instance, 'json');
    }
}