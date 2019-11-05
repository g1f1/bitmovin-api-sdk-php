<?php

namespace BitmovinApiSdk\Models;

class CloudRegion extends \BitmovinApiSdk\Common\Enum
{
    /** @var string */
    private const AWS_US_EAST_1 = 'AWS_US_EAST_1';

    /** @var string */
    private const AWS_US_EAST_2 = 'AWS_US_EAST_2';

    /** @var string */
    private const AWS_US_WEST_1 = 'AWS_US_WEST_1';

    /** @var string */
    private const AWS_US_WEST_2 = 'AWS_US_WEST_2';

    /** @var string */
    private const AWS_EU_WEST_1 = 'AWS_EU_WEST_1';

    /** @var string */
    private const AWS_EU_CENTRAL_1 = 'AWS_EU_CENTRAL_1';

    /** @var string */
    private const AWS_AP_SOUTHEAST_1 = 'AWS_AP_SOUTHEAST_1';

    /** @var string */
    private const AWS_AP_SOUTHEAST_2 = 'AWS_AP_SOUTHEAST_2';

    /** @var string */
    private const AWS_AP_NORTHEAST_1 = 'AWS_AP_NORTHEAST_1';

    /** @var string */
    private const AWS_AP_NORTHEAST_2 = 'AWS_AP_NORTHEAST_2';

    /** @var string */
    private const AWS_AP_SOUTH_1 = 'AWS_AP_SOUTH_1';

    /** @var string */
    private const AWS_SA_EAST_1 = 'AWS_SA_EAST_1';

    /** @var string */
    private const AWS_EU_WEST_2 = 'AWS_EU_WEST_2';

    /** @var string */
    private const AWS_EU_WEST_3 = 'AWS_EU_WEST_3';

    /** @var string */
    private const AWS_CA_CENTRAL_1 = 'AWS_CA_CENTRAL_1';

    /** @var string */
    private const GOOGLE_US_CENTRAL_1 = 'GOOGLE_US_CENTRAL_1';

    /** @var string */
    private const GOOGLE_US_EAST_1 = 'GOOGLE_US_EAST_1';

    /** @var string */
    private const GOOGLE_ASIA_EAST_1 = 'GOOGLE_ASIA_EAST_1';

    /** @var string */
    private const GOOGLE_EUROPE_WEST_1 = 'GOOGLE_EUROPE_WEST_1';

    /** @var string */
    private const GOOGLE_US_WEST_1 = 'GOOGLE_US_WEST_1';

    /** @var string */
    private const GOOGLE_ASIA_EAST_2 = 'GOOGLE_ASIA_EAST_2';

    /** @var string */
    private const GOOGLE_ASIA_NORTHEAST_1 = 'GOOGLE_ASIA_NORTHEAST_1';

    /** @var string */
    private const GOOGLE_ASIA_SOUTH_1 = 'GOOGLE_ASIA_SOUTH_1';

    /** @var string */
    private const GOOGLE_ASIA_SOUTHEAST_1 = 'GOOGLE_ASIA_SOUTHEAST_1';

    /** @var string */
    private const GOOGLE_AUSTRALIA_SOUTHEAST_1 = 'GOOGLE_AUSTRALIA_SOUTHEAST_1';

    /** @var string */
    private const GOOGLE_EUROPE_NORTH_1 = 'GOOGLE_EUROPE_NORTH_1';

    /** @var string */
    private const GOOGLE_EUROPE_WEST_2 = 'GOOGLE_EUROPE_WEST_2';

    /** @var string */
    private const GOOGLE_EUROPE_WEST_4 = 'GOOGLE_EUROPE_WEST_4';

    /** @var string */
    private const GOOGLE_NORTHAMERICA_NORTHEAST_1 = 'GOOGLE_NORTHAMERICA_NORTHEAST_1';

    /** @var string */
    private const GOOGLE_SOUTHAMERICA_EAST_1 = 'GOOGLE_SOUTHAMERICA_EAST_1';

    /** @var string */
    private const GOOGLE_US_EAST_4 = 'GOOGLE_US_EAST_4';

    /** @var string */
    private const GOOGLE_US_WEST_2 = 'GOOGLE_US_WEST_2';

    /** @var string */
    private const AZURE_EUROPE_WEST = 'AZURE_EUROPE_WEST';

    /** @var string */
    private const AZURE_US_WEST2 = 'AZURE_US_WEST2';

    /** @var string */
    private const AZURE_US_EAST = 'AZURE_US_EAST';

    /** @var string */
    private const AZURE_AUSTRALIA_SOUTHEAST = 'AZURE_AUSTRALIA_SOUTHEAST';

    /** @var string */
    private const AZURE_AUSTRALIA_EAST = 'AZURE_AUSTRALIA_EAST';

    /** @var string */
    private const NORTH_AMERICA = 'NORTH_AMERICA';

    /** @var string */
    private const SOUTH_AMERICA = 'SOUTH_AMERICA';

    /** @var string */
    private const EUROPE = 'EUROPE';

    /** @var string */
    private const AFRICA = 'AFRICA';

    /** @var string */
    private const ASIA = 'ASIA';

    /** @var string */
    private const AUSTRALIA = 'AUSTRALIA';

    /** @var string */
    private const AWS = 'AWS';

    /** @var string */
    private const GOOGLE = 'GOOGLE';

    /** @var string */
    private const KUBERNETES = 'KUBERNETES';

    /** @var string */
    private const EXTERNAL = 'EXTERNAL';

    /** @var string */
    private const AUTO = 'AUTO';

    /**
     * @param string $value
     * @return CloudRegion
     */
    public static function create(string $value)
    {
        return new static($value);
    }

    /**
     * AWS US East (N. Virginia)
     *
     * @return CloudRegion
     */
    public static function AWS_US_EAST_1()
    {
        return new CloudRegion(self::AWS_US_EAST_1);
    }

    /**
     * AWS US East (Ohio)
     *
     * @return CloudRegion
     */
    public static function AWS_US_EAST_2()
    {
        return new CloudRegion(self::AWS_US_EAST_2);
    }

    /**
     * AWS US West (N. California)
     *
     * @return CloudRegion
     */
    public static function AWS_US_WEST_1()
    {
        return new CloudRegion(self::AWS_US_WEST_1);
    }

    /**
     * AWS US West (Oregon)
     *
     * @return CloudRegion
     */
    public static function AWS_US_WEST_2()
    {
        return new CloudRegion(self::AWS_US_WEST_2);
    }

    /**
     * AWS EU (Ireland)
     *
     * @return CloudRegion
     */
    public static function AWS_EU_WEST_1()
    {
        return new CloudRegion(self::AWS_EU_WEST_1);
    }

    /**
     * AWS EU (Frankfurt)
     *
     * @return CloudRegion
     */
    public static function AWS_EU_CENTRAL_1()
    {
        return new CloudRegion(self::AWS_EU_CENTRAL_1);
    }

    /**
     * AWS Asia Pacific (Singapore)
     *
     * @return CloudRegion
     */
    public static function AWS_AP_SOUTHEAST_1()
    {
        return new CloudRegion(self::AWS_AP_SOUTHEAST_1);
    }

    /**
     * AWS Asia Pacific (Sydney)
     *
     * @return CloudRegion
     */
    public static function AWS_AP_SOUTHEAST_2()
    {
        return new CloudRegion(self::AWS_AP_SOUTHEAST_2);
    }

    /**
     * AWS Asia Pacific (Tokyo)
     *
     * @return CloudRegion
     */
    public static function AWS_AP_NORTHEAST_1()
    {
        return new CloudRegion(self::AWS_AP_NORTHEAST_1);
    }

    /**
     * AWS Asia Pacific (Seoul)
     *
     * @return CloudRegion
     */
    public static function AWS_AP_NORTHEAST_2()
    {
        return new CloudRegion(self::AWS_AP_NORTHEAST_2);
    }

    /**
     * AWS Asia Pacific (Mumbai)
     *
     * @return CloudRegion
     */
    public static function AWS_AP_SOUTH_1()
    {
        return new CloudRegion(self::AWS_AP_SOUTH_1);
    }

    /**
     * AWS South America (São Paulo)
     *
     * @return CloudRegion
     */
    public static function AWS_SA_EAST_1()
    {
        return new CloudRegion(self::AWS_SA_EAST_1);
    }

    /**
     * AWS EU (London)
     *
     * @return CloudRegion
     */
    public static function AWS_EU_WEST_2()
    {
        return new CloudRegion(self::AWS_EU_WEST_2);
    }

    /**
     * AWS EU (Paris)
     *
     * @return CloudRegion
     */
    public static function AWS_EU_WEST_3()
    {
        return new CloudRegion(self::AWS_EU_WEST_3);
    }

    /**
     * AWS Canada (Central)
     *
     * @return CloudRegion
     */
    public static function AWS_CA_CENTRAL_1()
    {
        return new CloudRegion(self::AWS_CA_CENTRAL_1);
    }

    /**
     * Google Council Bluffs, Iowa, USA
     *
     * @return CloudRegion
     */
    public static function GOOGLE_US_CENTRAL_1()
    {
        return new CloudRegion(self::GOOGLE_US_CENTRAL_1);
    }

    /**
     * Google Moncks Corner, South Carolina, USA
     *
     * @return CloudRegion
     */
    public static function GOOGLE_US_EAST_1()
    {
        return new CloudRegion(self::GOOGLE_US_EAST_1);
    }

    /**
     * Google Changhua County, Taiwan
     *
     * @return CloudRegion
     */
    public static function GOOGLE_ASIA_EAST_1()
    {
        return new CloudRegion(self::GOOGLE_ASIA_EAST_1);
    }

    /**
     * Google St. Ghislain, Belgium
     *
     * @return CloudRegion
     */
    public static function GOOGLE_EUROPE_WEST_1()
    {
        return new CloudRegion(self::GOOGLE_EUROPE_WEST_1);
    }

    /**
     * Google The Dalles, Oregon, USA
     *
     * @return CloudRegion
     */
    public static function GOOGLE_US_WEST_1()
    {
        return new CloudRegion(self::GOOGLE_US_WEST_1);
    }

    /**
     * Google Hong Kong
     *
     * @return CloudRegion
     */
    public static function GOOGLE_ASIA_EAST_2()
    {
        return new CloudRegion(self::GOOGLE_ASIA_EAST_2);
    }

    /**
     * Google Tokyo, Japan
     *
     * @return CloudRegion
     */
    public static function GOOGLE_ASIA_NORTHEAST_1()
    {
        return new CloudRegion(self::GOOGLE_ASIA_NORTHEAST_1);
    }

    /**
     * Google Mumbai, India
     *
     * @return CloudRegion
     */
    public static function GOOGLE_ASIA_SOUTH_1()
    {
        return new CloudRegion(self::GOOGLE_ASIA_SOUTH_1);
    }

    /**
     * Google Jurong West, Singapore
     *
     * @return CloudRegion
     */
    public static function GOOGLE_ASIA_SOUTHEAST_1()
    {
        return new CloudRegion(self::GOOGLE_ASIA_SOUTHEAST_1);
    }

    /**
     * Google Sydney, Australia
     *
     * @return CloudRegion
     */
    public static function GOOGLE_AUSTRALIA_SOUTHEAST_1()
    {
        return new CloudRegion(self::GOOGLE_AUSTRALIA_SOUTHEAST_1);
    }

    /**
     * Google Hamina, Finland
     *
     * @return CloudRegion
     */
    public static function GOOGLE_EUROPE_NORTH_1()
    {
        return new CloudRegion(self::GOOGLE_EUROPE_NORTH_1);
    }

    /**
     * Google London, England, UK
     *
     * @return CloudRegion
     */
    public static function GOOGLE_EUROPE_WEST_2()
    {
        return new CloudRegion(self::GOOGLE_EUROPE_WEST_2);
    }

    /**
     * Google Eemshaven, Netherlands
     *
     * @return CloudRegion
     */
    public static function GOOGLE_EUROPE_WEST_4()
    {
        return new CloudRegion(self::GOOGLE_EUROPE_WEST_4);
    }

    /**
     * Google Montréal, Québec, Canada
     *
     * @return CloudRegion
     */
    public static function GOOGLE_NORTHAMERICA_NORTHEAST_1()
    {
        return new CloudRegion(self::GOOGLE_NORTHAMERICA_NORTHEAST_1);
    }

    /**
     * Google São Paulo, Brazil
     *
     * @return CloudRegion
     */
    public static function GOOGLE_SOUTHAMERICA_EAST_1()
    {
        return new CloudRegion(self::GOOGLE_SOUTHAMERICA_EAST_1);
    }

    /**
     * Google Ashburn, Northern Virginia, USA
     *
     * @return CloudRegion
     */
    public static function GOOGLE_US_EAST_4()
    {
        return new CloudRegion(self::GOOGLE_US_EAST_4);
    }

    /**
     * Google Los Angeles, California, USA
     *
     * @return CloudRegion
     */
    public static function GOOGLE_US_WEST_2()
    {
        return new CloudRegion(self::GOOGLE_US_WEST_2);
    }

    /**
     * AZURE_EUROPE_WEST
     *
     * @return CloudRegion
     */
    public static function AZURE_EUROPE_WEST()
    {
        return new CloudRegion(self::AZURE_EUROPE_WEST);
    }

    /**
     * AZURE_US_WEST2
     *
     * @return CloudRegion
     */
    public static function AZURE_US_WEST2()
    {
        return new CloudRegion(self::AZURE_US_WEST2);
    }

    /**
     * AZURE_US_EAST
     *
     * @return CloudRegion
     */
    public static function AZURE_US_EAST()
    {
        return new CloudRegion(self::AZURE_US_EAST);
    }

    /**
     * AZURE_AUSTRALIA_SOUTHEAST
     *
     * @return CloudRegion
     */
    public static function AZURE_AUSTRALIA_SOUTHEAST()
    {
        return new CloudRegion(self::AZURE_AUSTRALIA_SOUTHEAST);
    }

    /**
     * AZURE_AUSTRALIA_EAST
     *
     * @return CloudRegion
     */
    public static function AZURE_AUSTRALIA_EAST()
    {
        return new CloudRegion(self::AZURE_AUSTRALIA_EAST);
    }

    /**
     * NORTH_AMERICA
     *
     * @return CloudRegion
     */
    public static function NORTH_AMERICA()
    {
        return new CloudRegion(self::NORTH_AMERICA);
    }

    /**
     * SOUTH_AMERICA
     *
     * @return CloudRegion
     */
    public static function SOUTH_AMERICA()
    {
        return new CloudRegion(self::SOUTH_AMERICA);
    }

    /**
     * EUROPE
     *
     * @return CloudRegion
     */
    public static function EUROPE()
    {
        return new CloudRegion(self::EUROPE);
    }

    /**
     * AFRICA
     *
     * @return CloudRegion
     */
    public static function AFRICA()
    {
        return new CloudRegion(self::AFRICA);
    }

    /**
     * ASIA
     *
     * @return CloudRegion
     */
    public static function ASIA()
    {
        return new CloudRegion(self::ASIA);
    }

    /**
     * AUSTRALIA
     *
     * @return CloudRegion
     */
    public static function AUSTRALIA()
    {
        return new CloudRegion(self::AUSTRALIA);
    }

    /**
     * AWS
     *
     * @return CloudRegion
     */
    public static function AWS()
    {
        return new CloudRegion(self::AWS);
    }

    /**
     * GOOGLE
     *
     * @return CloudRegion
     */
    public static function GOOGLE()
    {
        return new CloudRegion(self::GOOGLE);
    }

    /**
     * KUBERNETES
     *
     * @return CloudRegion
     */
    public static function KUBERNETES()
    {
        return new CloudRegion(self::KUBERNETES);
    }

    /**
     * EXTERNAL
     *
     * @return CloudRegion
     */
    public static function EXTERNAL()
    {
        return new CloudRegion(self::EXTERNAL);
    }

    /**
     * AUTO
     *
     * @return CloudRegion
     */
    public static function AUTO()
    {
        return new CloudRegion(self::AUTO);
    }
}

