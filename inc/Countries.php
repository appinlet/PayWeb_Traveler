<?php
/**
 * Plugin Name: Traveler PayGate PayWeb3
 * Description: This plugin is used for Traveler Theme
 * Version: 1.0.0
 * Author: App Inlet (Pty) Ltd
 * Author URI: https://www.appinlet.com
 *
 * Copyright: © 2021 PayGate (Pty) Ltd.
 *
 * License: GPLv2 or later
 * Text Domain: traveler-paygate
 */

class Countries
{
    const US_DOLLAR = 'U.S. Dollar';
    const E_CARIBBEAN_DOLLAR = 'E.Caribbean Dollar';
    const NORWEGIAN_KRONE = 'Norwegian Krone';
    const AUSTRALIAN_DOLLAR = 'Australian Dollar';
    const CFA_FRANC_BCEAO = 'CFA Franc BCEAO';
    const CFA_FRANC_BEAC = 'CFA Franc BEAC';
    const NEW_ZEALAND_DOLLAR = 'New Zealand Dollar';
    const DANISH_KRONE = 'Danish Krone';
    const CFP_FRANC = 'CFP Franc';

    private static $countries = [
        [
            'countryName'         => 'Albania',
            'countryCode'         => 'ALB',
            'countryCurrency'     => 'Lek',
            'countryCurrencyCode' => 'ALL'
        ],
        [
            'countryName'         => 'Algeria',
            'countryCode'         => 'DZA',
            'countryCurrency'     => 'Algerian Dinar',
            'countryCurrencyCode' => 'DZD'
        ],
        [
            'countryName'         => 'American Samoa',
            'countryCode'         => 'ASM',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Andorra',
            'countryCode'         => 'AND',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Angola',
            'countryCode'         => 'AGO',
            'countryCurrency'     => 'Kwanza',
            'countryCurrencyCode' => 'AOA'
        ],
        [
            'countryName'         => 'Anguilla',
            'countryCode'         => 'AIA',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Antarctica',
            'countryCode'         => 'ATA',
            'countryCurrency'     => self::NORWEGIAN_KRONE,
            'countryCurrencyCode' => 'NOK'
        ],
        [
            'countryName'         => 'Antigua and Barbuda',
            'countryCode'         => 'ATG',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Argentina',
            'countryCode'         => 'ARG',
            'countryCurrency'     => 'Argentine Peso',
            'countryCurrencyCode' => 'ARS'
        ],
        [
            'countryName'         => 'Armenia',
            'countryCode'         => 'ARM',
            'countryCurrency'     => 'Armenian Dram',
            'countryCurrencyCode' => 'AMD'
        ],
        [
            'countryName'         => 'Aruba',
            'countryCode'         => 'ABW',
            'countryCurrency'     => 'Aruban Guilder',
            'countryCurrencyCode' => 'AWG'
        ],
        [
            'countryName'         => 'Australia',
            'countryCode'         => 'AUS',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Austria',
            'countryCode'         => 'AUT',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Azerbaijan',
            'countryCode'         => 'AZE',
            'countryCurrency'     => 'Azerbaijan Manat',
            'countryCurrencyCode' => 'AZM'
        ],
        [
            'countryName'         => 'Bahamas',
            'countryCode'         => 'BHS',
            'countryCurrency'     => 'Bahamian Dollar',
            'countryCurrencyCode' => 'BSD'
        ],
        [
            'countryName'         => 'Bahrain',
            'countryCode'         => 'BHR',
            'countryCurrency'     => 'Bahraini Dinar',
            'countryCurrencyCode' => 'BHD'
        ],
        [
            'countryName'         => 'Bangladesh',
            'countryCode'         => 'BGD',
            'countryCurrency'     => 'Taka',
            'countryCurrencyCode' => 'BDT'
        ],
        [
            'countryName'         => 'Barbados',
            'countryCode'         => 'BRB',
            'countryCurrency'     => 'Barbados Dollar',
            'countryCurrencyCode' => 'BBD'
        ],
        [
            'countryName'         => 'Belarus',
            'countryCode'         => 'BLR',
            'countryCurrency'     => 'Belarussian Ruble',
            'countryCurrencyCode' => 'BYR'
        ],
        [
            'countryName'         => 'Belgium',
            'countryCode'         => 'BEL',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Belize',
            'countryCode'         => 'BLZ',
            'countryCurrency'     => 'Belize Dollar',
            'countryCurrencyCode' => 'BZD'
        ],
        [
            'countryName'         => 'Benin',
            'countryCode'         => 'BEN',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Bermuda',
            'countryCode'         => 'BMU',
            'countryCurrency'     => 'Bermudian Dollar',
            'countryCurrencyCode' => 'BMD'
        ],
        [
            'countryName'         => 'Bhutan',
            'countryCode'         => 'BTN',
            'countryCurrency'     => 'Indian Rupee',
            'countryCurrencyCode' => 'INR'
        ],
        [
            'countryName'         => 'Bolivia',
            'countryCode'         => 'BOL',
            'countryCurrency'     => 'Boliviano',
            'countryCurrencyCode' => 'BOB'
        ],
        [
            'countryName'         => 'Bosnia and Herzegovina',
            'countryCode'         => 'BIH',
            'countryCurrency'     => 'Bosnian Convertible Mark',
            'countryCurrencyCode' => 'BAM'
        ],
        [
            'countryName'         => 'Botswana',
            'countryCode'         => 'BWA',
            'countryCurrency'     => 'Pula',
            'countryCurrencyCode' => 'BWP'
        ],
        [
            'countryName'         => 'Bouvet Is.',
            'countryCode'         => 'BVT',
            'countryCurrency'     => self::NORWEGIAN_KRONE,
            'countryCurrencyCode' => 'NOK'
        ],
        [
            'countryName'         => 'Brazil',
            'countryCode'         => 'BRA',
            'countryCurrency'     => 'Brazilian Real',
            'countryCurrencyCode' => 'BRL'
        ],
        [
            'countryName'         => 'British Indian Ocean Territory',
            'countryCode'         => 'IOT',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'British Virgin Is.',
            'countryCode'         => 'VGB',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Brunei Darussalam',
            'countryCode'         => 'BRN',
            'countryCurrency'     => 'Brunei Dollar',
            'countryCurrencyCode' => 'BND'
        ],
        [
            'countryName'         => 'Bulgaria',
            'countryCode'         => 'BGR',
            'countryCurrency'     => 'Bulgarian Lev',
            'countryCurrencyCode' => 'BGN'
        ],
        [
            'countryName'         => 'Burkina Faso',
            'countryCode'         => 'BFA',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Burundi',
            'countryCode'         => 'BDI',
            'countryCurrency'     => 'Burundi Franc',
            'countryCurrencyCode' => 'BIF'
        ],
        [
            'countryName'         => 'Cambodia',
            'countryCode'         => 'KHM',
            'countryCurrency'     => 'Riel',
            'countryCurrencyCode' => 'KHR'
        ],
        [
            'countryName'         => 'Cameroon United Republic of',
            'countryCode'         => 'CMR',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Canada',
            'countryCode'         => 'CAN',
            'countryCurrency'     => 'Canadian Dollar',
            'countryCurrencyCode' => 'CAD'
        ],
        [
            'countryName'         => 'Cape Verde Is.',
            'countryCode'         => 'CPV',
            'countryCurrency'     => 'Cape Verde Escudo',
            'countryCurrencyCode' => 'CVE'
        ],
        [
            'countryName'         => 'Cayman Is.',
            'countryCode'         => 'CYM',
            'countryCurrency'     => 'Cayman Is. Dollar',
            'countryCurrencyCode' => 'KYD'
        ],
        [
            'countryName'         => 'Central African Republic',
            'countryCode'         => 'CAF',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Chad',
            'countryCode'         => 'TCD',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Chile',
            'countryCode'         => 'CHL',
            'countryCurrency'     => 'Chilean Peso',
            'countryCurrencyCode' => 'CLP'
        ],
        [
            'countryName'         => 'China',
            'countryCode'         => 'CHN',
            'countryCurrency'     => 'Yuan Renminbi',
            'countryCurrencyCode' => 'CNY'
        ],
        [
            'countryName'         => 'Christmas Is.',
            'countryCode'         => 'CXR',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Cocos (Keeling) Is.',
            'countryCode'         => 'CCK',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Colombia',
            'countryCode'         => 'COL',
            'countryCurrency'     => 'Colombian Peso',
            'countryCurrencyCode' => 'COP'
        ],
        [
            'countryName'         => 'Comoros',
            'countryCode'         => 'COM',
            'countryCurrency'     => 'Comoro Franc',
            'countryCurrencyCode' => 'KMF'
        ],
        [
            'countryName'         => 'Congo',
            'countryCode'         => 'COG',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Cook Is.',
            'countryCode'         => 'COK',
            'countryCurrency'     => self::NEW_ZEALAND_DOLLAR,
            'countryCurrencyCode' => 'NZD'
        ],
        [
            'countryName'         => 'Costa Rica',
            'countryCode'         => 'CRI',
            'countryCurrency'     => 'Costa Rican Colon',
            'countryCurrencyCode' => 'CRC'
        ],
        [
            'countryName'         => 'Côte d’Ivoire (Ivory Coast)',
            'countryCode'         => 'CIV',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Croatia',
            'countryCode'         => 'HRV',
            'countryCurrency'     => 'Croatian Kuna',
            'countryCurrencyCode' => 'HRK'
        ],
        [
            'countryName'         => 'Cuba',
            'countryCode'         => 'CUB',
            'countryCurrency'     => 'Cuban Peso',
            'countryCurrencyCode' => 'CUP'
        ],
        [
            'countryName'         => 'Cyprus',
            'countryCode'         => 'CYP',
            'countryCurrency'     => 'Cyprus Pound',
            'countryCurrencyCode' => 'CYP'
        ],
        [
            'countryName'         => 'Czech Republic',
            'countryCode'         => 'CZE',
            'countryCurrency'     => 'Czech Koruna',
            'countryCurrencyCode' => 'CZK'
        ],
        [
            'countryName'         => 'Democratic Republic of the Congo (formerly Zaire)',
            'countryCode'         => 'COD',
            'countryCurrency'     => 'Franc Congolais (formerly New Zaire)',
            'countryCurrencyCode' => 'CDF'
        ],
        [
            'countryName'         => 'Denmark',
            'countryCode'         => 'DNK',
            'countryCurrency'     => self::DANISH_KRONE,
            'countryCurrencyCode' => 'DKK'
        ],
        [
            'countryName'         => 'Djibouti',
            'countryCode'         => 'DJI',
            'countryCurrency'     => 'Djibouti Franc',
            'countryCurrencyCode' => 'DJF'
        ],
        [
            'countryName'         => 'Dominica',
            'countryCode'         => 'DMA',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Dominican Rep.',
            'countryCode'         => 'DOM',
            'countryCurrency'     => 'Dominican Peso',
            'countryCurrencyCode' => 'DOP'
        ],
        [
            'countryName'         => 'East Timor',
            'countryCode'         => 'TMP',
            'countryCurrency'     => 'Timor Escudo',
            'countryCurrencyCode' => 'TPE'
        ],
        [
            'countryName'         => 'Ecuador',
            'countryCode'         => 'ECU',
            'countryCurrency'     => 'Sucre',
            'countryCurrencyCode' => 'ECS'
        ],
        [
            'countryName'         => 'Egypt',
            'countryCode'         => 'EGY',
            'countryCurrency'     => 'Egyptian Pound',
            'countryCurrencyCode' => 'EGP'
        ],
        [
            'countryName'         => 'El Salvador',
            'countryCode'         => 'SLV',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Equatorial Guinea',
            'countryCode'         => 'GNQ',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Eritrea',
            'countryCode'         => 'ERI',
            'countryCurrency'     => 'Eritean Nakfa',
            'countryCurrencyCode' => 'ERN'
        ],
        [
            'countryName'         => 'Estonia',
            'countryCode'         => 'EST',
            'countryCurrency'     => 'Kroon',
            'countryCurrencyCode' => 'EEK'
        ],
        [
            'countryName'         => 'Ethiopia',
            'countryCode'         => 'ETH',
            'countryCurrency'     => 'Ethiopian Birr',
            'countryCurrencyCode' => 'ETB'
        ],
        [
            'countryName'         => 'European Monetary Cooperation Fund',
            'countryCode'         => '--',
            'countryCurrency'     => 'European Currency Unit',
            'countryCurrencyCode' => 'XEU'
        ],
        [
            'countryName'         => 'European Union',
            'countryCode'         => '--',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Faeroe Is.',
            'countryCode'         => 'FRO',
            'countryCurrency'     => self::DANISH_KRONE,
            'countryCurrencyCode' => 'DKK'
        ],
        [
            'countryName'         => 'Falkland Is. (Malvinas)',
            'countryCode'         => 'FLK',
            'countryCurrency'     => 'Falkland Is. Pound',
            'countryCurrencyCode' => 'FKP'
        ],
        [
            'countryName'         => 'Fiji',
            'countryCode'         => 'FJI',
            'countryCurrency'     => 'Fiji Dollar',
            'countryCurrencyCode' => 'FJD'
        ],
        [
            'countryName'         => 'Finland',
            'countryCode'         => 'FIN',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'France',
            'countryCode'         => 'FRA',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'France Metropolitan',
            'countryCode'         => 'FXX',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'French Guiana',
            'countryCode'         => 'GUF',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'French Polynesia',
            'countryCode'         => 'PYF',
            'countryCurrency'     => self::CFP_FRANC,
            'countryCurrencyCode' => 'XPF'
        ],
        [
            'countryName'         => 'French Southern Territory',
            'countryCode'         => 'ATF',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Gabon',
            'countryCode'         => 'GAB',
            'countryCurrency'     => self::CFA_FRANC_BEAC,
            'countryCurrencyCode' => 'XAF'
        ],
        [
            'countryName'         => 'Gambia',
            'countryCode'         => 'GMB',
            'countryCurrency'     => 'Dalasi',
            'countryCurrencyCode' => 'GMD'
        ],
        [
            'countryName'         => 'Georgia',
            'countryCode'         => 'GEO',
            'countryCurrency'     => 'Georgian Lari',
            'countryCurrencyCode' => 'GEL'
        ],
        [
            'countryName'         => 'Germany',
            'countryCode'         => 'DEU',
            'countryCurrency'     => 'Deutsche Mark',
            'countryCurrencyCode' => 'DEM'
        ],
        ['countryName' => 'Ghana', 'countryCode' => 'GHA', 'countryCurrency' => 'Cedi', 'countryCurrencyCode' => 'GHC'],
        [
            'countryName'         => 'Gibraltar',
            'countryCode'         => 'GIB',
            'countryCurrency'     => 'Gibraltar Pound',
            'countryCurrencyCode' => 'GIP'
        ],
        [
            'countryName'         => 'Greece',
            'countryCode'         => 'GRC',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Greenland',
            'countryCode'         => 'GRL',
            'countryCurrency'     => self::DANISH_KRONE,
            'countryCurrencyCode' => 'DKK'
        ],
        [
            'countryName'         => 'Grenada',
            'countryCode'         => 'GRD',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Guadeloupe',
            'countryCode'         => 'GLP',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Guam',
            'countryCode'         => 'GUM',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Guatemala',
            'countryCode'         => 'GTM',
            'countryCurrency'     => 'Quetzal',
            'countryCurrencyCode' => 'GTQ'
        ],
        [
            'countryName'         => 'Guinea',
            'countryCode'         => 'GIN',
            'countryCurrency'     => 'Guinea Franc',
            'countryCurrencyCode' => 'GNF'
        ],
        [
            'countryName'         => 'Guinea—Bissau',
            'countryCode'         => 'GNB',
            'countryCurrency'     => 'Guinea-Bissau Peso',
            'countryCurrencyCode' => 'GWP'
        ],
        [
            'countryName'         => 'Guyana',
            'countryCode'         => 'GUY',
            'countryCurrency'     => 'Guyana Dollar',
            'countryCurrencyCode' => 'GYD'
        ],
        [
            'countryName'         => 'Haiti',
            'countryCode'         => 'HTI',
            'countryCurrency'     => 'Gourde',
            'countryCurrencyCode' => 'HTG'
        ],
        [
            'countryName'         => 'Heard and McDonald Is.',
            'countryCode'         => 'HMD',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Holy See (Vatican City State)',
            'countryCode'         => 'VAT',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Honduras',
            'countryCode'         => 'HND',
            'countryCurrency'     => 'Lempira',
            'countryCurrencyCode' => 'HNL'
        ],
        [
            'countryName'         => 'Hong Kong China',
            'countryCode'         => 'HKG',
            'countryCurrency'     => 'Hong Kong Dollar',
            'countryCurrencyCode' => 'HKD'
        ],
        [
            'countryName'         => 'Hungary',
            'countryCode'         => 'HUN',
            'countryCurrency'     => 'Forint',
            'countryCurrencyCode' => 'HUF'
        ],
        [
            'countryName'         => 'Iceland',
            'countryCode'         => 'ISL',
            'countryCurrency'     => 'Iceland Krona',
            'countryCurrencyCode' => 'ISK'
        ],
        [
            'countryName'         => 'India',
            'countryCode'         => 'IND',
            'countryCurrency'     => 'Indian Rupee',
            'countryCurrencyCode' => 'INR'
        ],
        [
            'countryName'         => 'Indonesia',
            'countryCode'         => 'IDN',
            'countryCurrency'     => 'Rupiah',
            'countryCurrencyCode' => 'IDR'
        ],
        [
            'countryName'         => 'Iran Airlines',
            'countryCode'         => '--',
            'countryCurrency'     => 'Iranian Airline Rate',
            'countryCurrencyCode' => 'IRA'
        ],
        [
            'countryName'         => 'Iran Islamic Republic of',
            'countryCode'         => 'IRN',
            'countryCurrency'     => 'Iranian Rial',
            'countryCurrencyCode' => 'IRR'
        ],
        [
            'countryName'         => 'Iraq',
            'countryCode'         => 'IRQ',
            'countryCurrency'     => 'Iraqi Dinar',
            'countryCurrencyCode' => 'IQD'
        ],
        [
            'countryName'         => 'Ireland Republic of',
            'countryCode'         => 'IRL',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Israel',
            'countryCode'         => 'ISR',
            'countryCurrency'     => 'New Israeli Shekel',
            'countryCurrencyCode' => 'ILS'
        ],
        ['countryName' => 'Italy', 'countryCode' => 'ITA', 'countryCurrency' => 'Euro', 'countryCurrencyCode' => 'EUR'],
        [
            'countryName'         => 'Jamaica',
            'countryCode'         => 'JAM',
            'countryCurrency'     => 'Jamaican Dollar',
            'countryCurrencyCode' => 'JMD'
        ],
        ['countryName' => 'Japan', 'countryCode' => 'JPN', 'countryCurrency' => 'Yen', 'countryCurrencyCode' => 'JPY'],
        [
            'countryName'         => 'Jordan',
            'countryCode'         => 'JOR',
            'countryCurrency'     => 'Jordanian Dinar',
            'countryCurrencyCode' => 'JOD'
        ],
        [
            'countryName'         => 'Kazakhstan',
            'countryCode'         => 'KAZ',
            'countryCurrency'     => 'Tenge',
            'countryCurrencyCode' => 'KZT'
        ],
        [
            'countryName'         => 'Kenya',
            'countryCode'         => 'KEN',
            'countryCurrency'     => 'Kenyan Shilling',
            'countryCurrencyCode' => 'KES'
        ],
        [
            'countryName'         => 'Kiribati',
            'countryCode'         => 'KIR',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Korea Democratic People’s Republic of (North Korea)',
            'countryCode'         => 'PRK',
            'countryCurrency'     => 'North Korean Won',
            'countryCurrencyCode' => 'KPW'
        ],
        [
            'countryName'         => 'Korea Republic of',
            'countryCode'         => 'KOR',
            'countryCurrency'     => 'Won',
            'countryCurrencyCode' => 'KRW'
        ],
        [
            'countryName'         => 'Kuwait',
            'countryCode'         => 'KWT',
            'countryCurrency'     => 'Kuwaiti Dinar',
            'countryCurrencyCode' => 'KWD'
        ],
        [
            'countryName'         => 'Kyrgyzstan',
            'countryCode'         => 'KGZ',
            'countryCurrency'     => 'Som',
            'countryCurrencyCode' => 'KGS'
        ],
        [
            'countryName'         => 'Lao People’s Democratic Republic',
            'countryCode'         => 'LAO',
            'countryCurrency'     => 'Kip',
            'countryCurrencyCode' => 'LAK'
        ],
        [
            'countryName'         => 'Latvia',
            'countryCode'         => 'LVA',
            'countryCurrency'     => 'Latvian Lats',
            'countryCurrencyCode' => 'LVL'
        ],
        [
            'countryName'         => 'Lebanon',
            'countryCode'         => 'LBN',
            'countryCurrency'     => 'Lebanese Pound',
            'countryCurrencyCode' => 'LBP'
        ],
        [
            'countryName'         => 'Lesotho',
            'countryCode'         => 'LSO',
            'countryCurrency'     => 'Rand',
            'countryCurrencyCode' => 'ZAR'
        ],
        [
            'countryName'         => 'Liberia',
            'countryCode'         => 'LBR',
            'countryCurrency'     => 'Liberian Dollar',
            'countryCurrencyCode' => 'LRD'
        ],
        [
            'countryName'         => 'Libyan Arab Jamahiriya',
            'countryCode'         => 'LBY',
            'countryCurrency'     => 'Libyan Dinar',
            'countryCurrencyCode' => 'LYD'
        ],
        [
            'countryName'         => 'Liechtenstein',
            'countryCode'         => 'LIE',
            'countryCurrency'     => 'Swiss Franc',
            'countryCurrencyCode' => 'CHF'
        ],
        [
            'countryName'         => 'Lithuania',
            'countryCode'         => 'LTU',
            'countryCurrency'     => 'Lithuanian Litas',
            'countryCurrencyCode' => 'LTL'
        ],
        [
            'countryName'         => 'Luxembourg',
            'countryCode'         => 'LUX',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Macau China',
            'countryCode'         => 'MAC',
            'countryCurrency'     => 'Pataca',
            'countryCurrencyCode' => 'MOP'
        ],
        [
            'countryName'         => 'Macedonia the Former Yugoslav Republic of',
            'countryCode'         => 'MKD',
            'countryCurrency'     => 'Denar',
            'countryCurrencyCode' => 'MKD'
        ],
        [
            'countryName'         => 'Madagascar',
            'countryCode'         => 'MDG',
            'countryCurrency'     => 'Malagasy Franc',
            'countryCurrencyCode' => 'MGF'
        ],
        [
            'countryName'         => 'Malawi',
            'countryCode'         => 'MWI',
            'countryCurrency'     => 'Malawi Kwacha',
            'countryCurrencyCode' => 'MWK'
        ],
        [
            'countryName'         => 'Malaysia',
            'countryCode'         => 'MYS',
            'countryCurrency'     => 'Malaysian Ringgit',
            'countryCurrencyCode' => 'MYR'
        ],
        [
            'countryName'         => 'Maldives',
            'countryCode'         => 'MDV',
            'countryCurrency'     => 'Rufiyaa',
            'countryCurrencyCode' => 'MVR'
        ],
        [
            'countryName'         => 'Mali',
            'countryCode'         => 'MLI',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Malta',
            'countryCode'         => 'MLT',
            'countryCurrency'     => 'Maltese Lira',
            'countryCurrencyCode' => 'MTL'
        ],
        [
            'countryName'         => 'Marshall Islands',
            'countryCode'         => 'MHL',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Martinique',
            'countryCode'         => 'MTQ',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Mauritania',
            'countryCode'         => 'MRT',
            'countryCurrency'     => 'Ouguiya',
            'countryCurrencyCode' => 'MRO'
        ],
        [
            'countryName'         => 'Mauritius',
            'countryCode'         => 'MUS',
            'countryCurrency'     => 'Mauritius Rupee',
            'countryCurrencyCode' => 'MUR'
        ],
        [
            'countryName'         => 'Mayotte',
            'countryCode'         => 'MYT',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Mexico',
            'countryCode'         => 'MEX',
            'countryCurrency'     => 'Mexican Peso',
            'countryCurrencyCode' => 'MXN'
        ],
        [
            'countryName'         => 'Micronesia',
            'countryCode'         => 'FSM',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Moldova Republic of',
            'countryCode'         => 'MDA',
            'countryCurrency'     => 'Moldovan Leu',
            'countryCurrencyCode' => 'MDL'
        ],
        [
            'countryName'         => 'Monaco',
            'countryCode'         => 'MCO',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Mongolia',
            'countryCode'         => 'MNG',
            'countryCurrency'     => 'Tugrik',
            'countryCurrencyCode' => 'MNT'
        ],
        [
            'countryName'         => 'Montenegro',
            'countryCode'         => '--',
            'countryCurrency'     => 'Yugoslavian New Dinar',
            'countryCurrencyCode' => 'YUM'
        ],
        [
            'countryName'         => 'Montserrat',
            'countryCode'         => 'MSR',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Morocco',
            'countryCode'         => 'MAR',
            'countryCurrency'     => 'Moroccan Dirham',
            'countryCurrencyCode' => 'MAD'
        ],
        [
            'countryName'         => 'Mozambique',
            'countryCode'         => 'MOZ',
            'countryCurrency'     => 'Metical',
            'countryCurrencyCode' => 'MZM'
        ],
        [
            'countryName'         => 'Myanmar',
            'countryCode'         => 'MMR',
            'countryCurrency'     => 'Kyat',
            'countryCurrencyCode' => 'MMK'
        ],
        [
            'countryName'         => 'Namibia',
            'countryCode'         => 'NAM',
            'countryCurrency'     => 'Namibia Dollar',
            'countryCurrencyCode' => 'NAD'
        ],
        [
            'countryName'         => 'Nauru',
            'countryCode'         => 'NRU',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Nepal',
            'countryCode'         => 'NPL',
            'countryCurrency'     => 'Nepalese Rupee',
            'countryCurrencyCode' => 'NPR'
        ],
        [
            'countryName'         => 'Netherlands',
            'countryCode'         => 'NLD',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Netherlands Antilles',
            'countryCode'         => 'ANT',
            'countryCurrency'     => 'Nether. Antillian Guilder',
            'countryCurrencyCode' => 'ANG'
        ],
        [
            'countryName'         => 'New Caledonia',
            'countryCode'         => 'NCL',
            'countryCurrency'     => self::CFP_FRANC,
            'countryCurrencyCode' => 'XPF'
        ],
        [
            'countryName'         => 'New Zealand',
            'countryCode'         => 'NZL',
            'countryCurrency'     => self::NEW_ZEALAND_DOLLAR,
            'countryCurrencyCode' => 'NZD'
        ],
        [
            'countryName'         => 'Nicaragua',
            'countryCode'         => 'NIC',
            'countryCurrency'     => 'Cordoba Oro',
            'countryCurrencyCode' => 'NIO'
        ],
        [
            'countryName'         => 'Niger',
            'countryCode'         => 'NER',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Nigeria',
            'countryCode'         => 'NGA',
            'countryCurrency'     => 'Naira',
            'countryCurrencyCode' => 'NGN'
        ],
        [
            'countryName'         => 'Niue',
            'countryCode'         => 'NIU',
            'countryCurrency'     => self::NEW_ZEALAND_DOLLAR,
            'countryCurrencyCode' => 'NZD'
        ],
        [
            'countryName'         => 'Norfolk Is.',
            'countryCode'         => 'NFK',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'Northern Mariana Islands',
            'countryCode'         => 'MNP',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Norway',
            'countryCode'         => 'NOR',
            'countryCurrency'     => self::NORWEGIAN_KRONE,
            'countryCurrencyCode' => 'NOK'
        ],
        [
            'countryName'         => 'Oman',
            'countryCode'         => 'OMN',
            'countryCurrency'     => 'Rial Omani',
            'countryCurrencyCode' => 'OMR'
        ],
        [
            'countryName'         => 'Pakistan',
            'countryCode'         => 'PAK',
            'countryCurrency'     => 'Pakistan Rupee',
            'countryCurrencyCode' => 'PKR'
        ],
        [
            'countryName'         => 'Palau',
            'countryCode'         => 'PLW',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Panama',
            'countryCode'         => 'PAN',
            'countryCurrency'     => 'Balboa',
            'countryCurrencyCode' => 'PAB'
        ],
        [
            'countryName'         => 'Papua New Guinea',
            'countryCode'         => 'PNG',
            'countryCurrency'     => 'Kina',
            'countryCurrencyCode' => 'PGK'
        ],
        [
            'countryName'         => 'Paraguay',
            'countryCode'         => 'PRY',
            'countryCurrency'     => 'Guarani',
            'countryCurrencyCode' => 'PYG'
        ],
        [
            'countryName'         => 'Peru',
            'countryCode'         => 'PER',
            'countryCurrency'     => 'Nuevo Sol',
            'countryCurrencyCode' => 'PEN'
        ],
        [
            'countryName'         => 'Philippines',
            'countryCode'         => 'PHL',
            'countryCurrency'     => 'Philippine Peso',
            'countryCurrencyCode' => 'PHP'
        ],
        [
            'countryName'         => 'Pitcairn',
            'countryCode'         => 'PCN',
            'countryCurrency'     => self::NEW_ZEALAND_DOLLAR,
            'countryCurrencyCode' => 'NZD'
        ],
        [
            'countryName'         => 'Poland',
            'countryCode'         => 'POL',
            'countryCurrency'     => 'Polish New Zloty',
            'countryCurrencyCode' => 'PLN'
        ],
        [
            'countryName'         => 'Portugal',
            'countryCode'         => 'PRT',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Puerto Rico',
            'countryCode'         => 'PRI',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Qatar',
            'countryCode'         => 'QAT',
            'countryCurrency'     => 'Qatari Rial',
            'countryCurrencyCode' => 'QAR'
        ],
        [
            'countryName'         => 'Reunion',
            'countryCode'         => 'REU',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Romania',
            'countryCode'         => 'ROM',
            'countryCurrency'     => 'Leu',
            'countryCurrencyCode' => 'ROL'
        ],
        [
            'countryName'         => 'Russian Federation',
            'countryCode'         => 'RUS',
            'countryCurrency'     => 'Russian Ruble (International)',
            'countryCurrencyCode' => 'RUB'
        ],
        [
            'countryName'         => 'Russian Ruble (Domestic)',
            'countryCode'         => 'RUS',
            'countryCurrency'     => 'Russian Ruble (Domestic)',
            'countryCurrencyCode' => 'RUR'
        ],
        [
            'countryName'         => 'Rwanda',
            'countryCode'         => 'RWA',
            'countryCurrency'     => 'Rwanda Franc',
            'countryCurrencyCode' => 'RWF'
        ],
        ['countryName' => 'Samoa', 'countryCode' => 'WSM', 'countryCurrency' => 'Tala', 'countryCurrencyCode' => 'WST'],
        [
            'countryName'         => 'San Marino',
            'countryCode'         => 'SMR',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'Sao Tome and Principe',
            'countryCode'         => 'STP',
            'countryCurrency'     => 'Dobra',
            'countryCurrencyCode' => 'STD'
        ],
        [
            'countryName'         => 'Saudi Arabia',
            'countryCode'         => 'SAU',
            'countryCurrency'     => 'Saudi Riyal',
            'countryCurrencyCode' => 'SAR'
        ],
        [
            'countryName'         => 'Senegal',
            'countryCode'         => 'SEN',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Seychelles',
            'countryCode'         => 'SYC',
            'countryCurrency'     => 'Seychelles Rupee',
            'countryCurrencyCode' => 'SCR'
        ],
        [
            'countryName'         => 'Sierra Leone',
            'countryCode'         => 'SLE',
            'countryCurrency'     => 'Leone',
            'countryCurrencyCode' => 'SLL'
        ],
        [
            'countryName'         => 'Singapore',
            'countryCode'         => 'SGP',
            'countryCurrency'     => 'Singapore Dollar',
            'countryCurrencyCode' => 'SGD'
        ],
        [
            'countryName'         => 'Slovakia',
            'countryCode'         => 'SVK',
            'countryCurrency'     => 'Slovak Koruna',
            'countryCurrencyCode' => 'SKK'
        ],
        [
            'countryName'         => 'Slovenia',
            'countryCode'         => 'SVN',
            'countryCurrency'     => 'Tolar',
            'countryCurrencyCode' => 'SIT'
        ],
        [
            'countryName'         => 'So. Georgia and So. Sandwich Is.',
            'countryCode'         => 'SGS',
            'countryCurrency'     => 'Pound Sterling',
            'countryCurrencyCode' => 'GBP'
        ],
        [
            'countryName'         => 'Solomon Is.',
            'countryCode'         => 'SLB',
            'countryCurrency'     => 'Solomon Is. Dollar',
            'countryCurrencyCode' => 'SBD'
        ],
        [
            'countryName'         => 'Somalia',
            'countryCode'         => 'SOM',
            'countryCurrency'     => 'Somali Shilling',
            'countryCurrencyCode' => 'SOS'
        ],
        [
            'countryName'         => 'South Africa',
            'countryCode'         => 'ZAF',
            'countryCurrency'     => 'Rand',
            'countryCurrencyCode' => 'ZAR'
        ],
        ['countryName' => 'Spain', 'countryCode' => 'ESP', 'countryCurrency' => 'Euro', 'countryCurrencyCode' => 'EUR'],
        [
            'countryName'         => 'Sri Lanka',
            'countryCode'         => 'LKA',
            'countryCurrency'     => 'Sri Lanka Rupee',
            'countryCurrencyCode' => 'LKR'
        ],
        [
            'countryName'         => 'St. Helena',
            'countryCode'         => 'SHN',
            'countryCurrency'     => 'St. Helena Pound',
            'countryCurrencyCode' => 'SHP'
        ],
        [
            'countryName'         => 'St. Kitts-Nevis',
            'countryCode'         => 'KNA',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'St. Lucia',
            'countryCode'         => 'LCA',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'St. Pierre and Miquelon',
            'countryCode'         => 'SPM',
            'countryCurrency'     => 'Euro',
            'countryCurrencyCode' => 'EUR'
        ],
        [
            'countryName'         => 'St. Vincent and The Grenadines',
            'countryCode'         => 'VCT',
            'countryCurrency'     => self::E_CARIBBEAN_DOLLAR,
            'countryCurrencyCode' => 'XCD'
        ],
        [
            'countryName'         => 'Sudan',
            'countryCode'         => 'SDN',
            'countryCurrency'     => 'Sudanese Pound',
            'countryCurrencyCode' => 'SDD'
        ],
        [
            'countryName'         => 'Sudan Airlines',
            'countryCode'         => '--',
            'countryCurrency'     => 'Sudan Airline Rate',
            'countryCurrencyCode' => 'SDA'
        ],
        [
            'countryName'         => 'Suriname',
            'countryCode'         => 'SUR',
            'countryCurrency'     => 'Surinam Guilder',
            'countryCurrencyCode' => 'SRG'
        ],
        [
            'countryName'         => 'Svalbard and Jan Mayen Is.',
            'countryCode'         => 'SJM',
            'countryCurrency'     => self::NORWEGIAN_KRONE,
            'countryCurrencyCode' => 'NOK'
        ],
        [
            'countryName'         => 'Swaziland',
            'countryCode'         => 'SWZ',
            'countryCurrency'     => 'Lilangeni',
            'countryCurrencyCode' => 'SZL'
        ],
        [
            'countryName'         => 'Sweden',
            'countryCode'         => 'SWE',
            'countryCurrency'     => 'Swedish Krona',
            'countryCurrencyCode' => 'SEK'
        ],
        [
            'countryName'         => 'Switzerland',
            'countryCode'         => 'CHE',
            'countryCurrency'     => 'Swiss Franc',
            'countryCurrencyCode' => 'CHF'
        ],
        [
            'countryName'         => 'Syrian Arab Rep.',
            'countryCode'         => 'SYR',
            'countryCurrency'     => 'Syrian Pound',
            'countryCurrencyCode' => 'SYP'
        ],
        [
            'countryName'         => 'Taiwan',
            'countryCode'         => 'TWN',
            'countryCurrency'     => 'New Taiwan Dollar',
            'countryCurrencyCode' => 'TWD'
        ],
        [
            'countryName'         => 'Tajikistan',
            'countryCode'         => 'TJK',
            'countryCurrency'     => 'Somoni',
            'countryCurrencyCode' => 'TJS'
        ],
        [
            'countryName'         => 'Tanzania United Republic of',
            'countryCode'         => 'TZA',
            'countryCurrency'     => 'Tanzanian Shilling',
            'countryCurrencyCode' => 'TZS'
        ],
        [
            'countryName'         => 'Thailand',
            'countryCode'         => 'THA',
            'countryCurrency'     => 'Thailand Baht',
            'countryCurrencyCode' => 'THB'
        ],
        [
            'countryName'         => 'Togo',
            'countryCode'         => 'TGO',
            'countryCurrency'     => self::CFA_FRANC_BCEAO,
            'countryCurrencyCode' => 'XOF'
        ],
        [
            'countryName'         => 'Tokelau',
            'countryCode'         => 'TKL',
            'countryCurrency'     => self::NEW_ZEALAND_DOLLAR,
            'countryCurrencyCode' => 'NZD'
        ],
        [
            'countryName'         => 'Tonga',
            'countryCode'         => 'TON',
            'countryCurrency'     => 'Pa’anga',
            'countryCurrencyCode' => 'TOP'
        ],
        [
            'countryName'         => 'Trinidad and Tobago',
            'countryCode'         => 'TTO',
            'countryCurrency'     => 'Trinidad and Tobago Dollar',
            'countryCurrencyCode' => 'TTD'
        ],
        [
            'countryName'         => 'Tunisia',
            'countryCode'         => 'TUN',
            'countryCurrency'     => 'Tunisian Dinar',
            'countryCurrencyCode' => 'TND'
        ],
        [
            'countryName'         => 'Turkey',
            'countryCode'         => 'TUR',
            'countryCurrency'     => 'Turkish Lira',
            'countryCurrencyCode' => 'TRL'
        ],
        [
            'countryName'         => 'Turkmenistan',
            'countryCode'         => 'TKM',
            'countryCurrency'     => 'Manat',
            'countryCurrencyCode' => 'TMM'
        ],
        [
            'countryName'         => 'Turks and Caicos Is.',
            'countryCode'         => 'TCA',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Tuvalu',
            'countryCode'         => 'TUV',
            'countryCurrency'     => self::AUSTRALIAN_DOLLAR,
            'countryCurrencyCode' => 'AUD'
        ],
        [
            'countryName'         => 'U.S. Minor Outlying Islands',
            'countryCode'         => 'UMI',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'U.S. Virgin Is.',
            'countryCode'         => 'VIR',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Uganda',
            'countryCode'         => 'UGA',
            'countryCurrency'     => 'Uganda Shilling',
            'countryCurrencyCode' => 'UGX'
        ],
        [
            'countryName'         => 'Ukraine',
            'countryCode'         => 'UKR',
            'countryCurrency'     => 'Ukrainian Hryvnia',
            'countryCurrencyCode' => 'UAH'
        ],
        [
            'countryName'         => 'United Arab Emirates',
            'countryCode'         => 'ARE',
            'countryCurrency'     => 'U.A.E. Dirham',
            'countryCurrencyCode' => 'AED'
        ],
        [
            'countryName'         => 'United Kingdom',
            'countryCode'         => 'GBR',
            'countryCurrency'     => 'Pound Sterling',
            'countryCurrencyCode' => 'GBP'
        ],
        [
            'countryName'         => 'United States',
            'countryCode'         => 'USA',
            'countryCurrency'     => self::US_DOLLAR,
            'countryCurrencyCode' => 'USD'
        ],
        [
            'countryName'         => 'Uruguay',
            'countryCode'         => 'URY',
            'countryCurrency'     => 'Peso Uruguayo',
            'countryCurrencyCode' => 'UYU'
        ],
        [
            'countryName'         => 'Uzbekistan',
            'countryCode'         => 'UZB',
            'countryCurrency'     => 'Uzbekistan Sum',
            'countryCurrencyCode' => 'UZS'
        ],
        [
            'countryName'         => 'Vanuatu',
            'countryCode'         => 'VUT',
            'countryCurrency'     => 'Vatu',
            'countryCurrencyCode' => 'VUV'
        ],
        [
            'countryName'         => 'Venezuela',
            'countryCode'         => 'VEN',
            'countryCurrency'     => 'Bolivar',
            'countryCurrencyCode' => 'VEB'
        ],
        [
            'countryName'         => 'Vietnam',
            'countryCode'         => 'VNM',
            'countryCurrency'     => 'Dong',
            'countryCurrencyCode' => 'VND'
        ],
        [
            'countryName'         => 'Wallis and Futuna Is.',
            'countryCode'         => 'WLF',
            'countryCurrency'     => self::CFP_FRANC,
            'countryCurrencyCode' => 'XPF'
        ],
        [
            'countryName'         => 'Western Sahara',
            'countryCode'         => 'ESH',
            'countryCurrency'     => 'Moroccan Dirham',
            'countryCurrencyCode' => 'MAD'
        ],
        [
            'countryName'         => 'Yemen',
            'countryCode'         => 'YEM',
            'countryCurrency'     => 'Yemeni Rial',
            'countryCurrencyCode' => 'YER'
        ],
        [
            'countryName'         => 'Yugoslavia',
            'countryCode'         => 'YUG',
            'countryCurrency'     => 'Yugoslavian New Dinar',
            'countryCurrencyCode' => 'YUM'
        ],
        [
            'countryName'         => 'Zambia',
            'countryCode'         => 'ZMB',
            'countryCurrency'     => 'Zambian Kwacha',
            'countryCurrencyCode' => 'ZMK'
        ],
        [
            'countryName'         => 'Zimbabwe',
            'countryCode'         => 'ZWE',
            'countryCurrency'     => 'Zimbabwe Dollar',
            'countryCurrencyCode' => 'ZWD'
        ],
    ];

    public static function getCountryCodeByCountryName($countryName)
    {
        foreach (self::$countries as $country) {
            if (strpos(strtolower($country['countryName']), strtolower($countryName)) !== false) {
                return $country['countryCode'];
            }
        }

        return null;
    }

    public static function isValidCountryCode($countryCode)
    {
        foreach (self::$countries as $country) {
            if (strpos(strtolower($country['countryCode']), strtolower($countryCode)) !== false) {
                return true;
            }
        }

        return false;
    }
}
