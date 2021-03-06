<?php
namespace Pokapi\Version;

class Legacy implements Version
{

    /**
     * @return int
     */
    public function getVersion() : int
    {
        return 4500;
    }

    /**
     * @return string
     */
    public function getAndroidVersion() : string
    {
        return "0.45.0";
    }

    /**
     * @return int
     */
    public function getUnknown25() : int
    {
        return -1553869577012279119;
    }

    /**
     * @return string
     */
    public function getPlatform8() : ?string
    {
        return null;
    }
}
