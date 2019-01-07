<?php
    /**
     * Created by PhpStorm.
     * User: brunopaz
     * Date: 2018-12-28
     * Time: 01:27
     */

    namespace Azpay\API;


    abstract class Currency
    {

        PUBLIC CONST AFGHANISTAN_AFGHANI_AFN                                            = "971";
        PUBLIC CONST LAND_ISLANDS_EURO_EUR                                              = "978";
        PUBLIC CONST ALBANIA_LEK_ALL                                                    = "008";
        PUBLIC CONST ALGERIA_ALGERIAN_DINAR_DZD                                         = "012";
        PUBLIC CONST AMERICAN_SAMOA_US_DOLLAR_USD                                       = "840";
        PUBLIC CONST ANDORRA_EURO_EUR                                                   = "978";
        PUBLIC CONST ANGOLA_KWANZA_AOA                                                  = "973";
        PUBLIC CONST ANGUILLA_EAST_CARIBBEAN_DOLLAR_XCD                                 = "951";
        PUBLIC CONST ANTIGUA_AND_BARBUDA_EAST_CARIBBEAN_DOLLAR_XCD                      = "951";
        PUBLIC CONST ARGENTINA_ARGENTINE_PESO_ARS                                       = "032";
        PUBLIC CONST ARMENIA_ARMENIAN_DRAM_AMD                                          = "051";
        PUBLIC CONST ARUBA_ARUBAN_FLORIN_AWG                                            = "533";
        PUBLIC CONST AUSTRALIA_AUSTRALIAN_DOLLAR_AUD                                    = "036";
        PUBLIC CONST AUSTRIA_EURO_EUR                                                   = "978";
        PUBLIC CONST AZERBAIJAN_AZERBAIJANIAN_MANAT_AZN                                 = "944";
        PUBLIC CONST BAHAMAS_BAHAMIAN_DOLLAR_BSD                                        = "044";
        PUBLIC CONST BAHRAIN_BAHRAINI_DINAR_BHD                                         = "048";
        PUBLIC CONST BANGLADESH_TAKA_BDT                                                = "050";
        PUBLIC CONST BARBADOS_BARBADOS_DOLLAR_BBD                                       = "052";
        PUBLIC CONST BELARUS_BELARUSSIAN_RUBLE_BYR                                      = "974";
        PUBLIC CONST BELGIUM_EURO_EUR                                                   = "978";
        PUBLIC CONST BELIZE_BELIZE_DOLLAR_BZD                                           = "084";
        PUBLIC CONST BENIN_CFA_FRANC_BCEAO_XOF                                          = "952";
        PUBLIC CONST BERMUDA_BERMUDIAN_DOLLAR_BMD                                       = "060";
        PUBLIC CONST BHUTAN_NGULTRUM_BTN                                                = "064";
        PUBLIC CONST BHUTAN_INDIAN_RUPEE_INR                                            = "356";
        PUBLIC CONST BOLIVIA_PLURINATIONAL_STATE_OF_BOLIVIANO_BOB                       = "068";
        PUBLIC CONST BOLIVIA_PLURINATIONAL_STATE_OF_MVDOL_BOV                           = "984";
        PUBLIC CONST BONAIRE_SINT_EUSTATIUS_AND_SABA_US_DOLLAR_USD                      = "840";
        PUBLIC CONST BOSNIA_AND_HERZEGOVINA_CONVERTIBLE_MARK_BAM                        = "977";
        PUBLIC CONST BOTSWANA_PULA_BWP                                                  = "072";
        PUBLIC CONST BOUVET_ISLAND_NORWEGIAN_KRONE_NOK                                  = "578";
        PUBLIC CONST BRAZIL_BRAZILIAN_REAL_BRL                                          = "986";
        PUBLIC CONST BRITISH_INDIAN_OCEAN_TERRITORY_US_DOLLAR_USD                       = "840";
        PUBLIC CONST BRUNEI_DARUSSALAM_BRUNEI_DOLLAR_BND                                = "096";
        PUBLIC CONST BULGARIA_BULGARIAN_LEV_BGN                                         = "975";
        PUBLIC CONST BURKINA_FASO_CFA_FRANC_BCEAO_XOF                                   = "952";
        PUBLIC CONST BURUNDI_BURUNDI_FRANC_BIF                                          = "108";
        PUBLIC CONST CAMBODIA_RIEL_KHR                                                  = "116";
        PUBLIC CONST CAMEROON_CFA_FRANC_BEAC_XAF                                        = "950";
        PUBLIC CONST CANADA_CANADIAN_DOLLAR_CAD                                         = "124";
        PUBLIC CONST CAPE_VERDE_CAPE_VERDE_ESCUDO_CVE                                   = "132";
        PUBLIC CONST CAYMAN_ISLANDS_CAYMAN_ISLANDS_DOLLAR_KYD                           = "136";
        PUBLIC CONST CENTRAL_AFRICAN_REPUBLIC_CFA_FRANC_BEAC_XAF                        = "950";
        PUBLIC CONST CHAD_CFA_FRANC_BEAC_XAF                                            = "950";
        PUBLIC CONST CHILE_CHILEAN_PESO_CLP                                             = "152";
        PUBLIC CONST CHILE_UNIDADES_DE_FOMENTO_CLF                                      = "990";
        PUBLIC CONST CHINA_YUAN_RENMINBI_CNY                                            = "156";
        PUBLIC CONST CHRISTMAS_ISLAND_AUSTRALIAN_DOLLAR_AUD                             = "036";
        PUBLIC CONST COCOS_ISLANDS_AUSTRALIAN_DOLLAR_AUD                                = "036";
        PUBLIC CONST COLOMBIA_COLOMBIAN_PESO_COP                                        = "170";
        PUBLIC CONST COLOMBIA_UNIDAD_DE_VALOR_REAL_COU                                  = "970";
        PUBLIC CONST COMOROS_COMORO_FRANC_KMF                                           = "174";
        PUBLIC CONST CONGO_CFA_FRANC_BEAC_XAF                                           = "950";
        PUBLIC CONST CONGO_THE_DEMOCRATIC_REPUBLIC_OF_CONGOLESE_FRANC_CDF               = "976";
        PUBLIC CONST COOK_ISLANDS_NEW_ZEALAND_DOLLAR_NZD                                = "554";
        PUBLIC CONST COSTA_RICA_COSTA_RICAN_COLON_CRC                                   = "188";
        PUBLIC CONST CITE_DOIVOIRE_CFA_FRANC_BCEAO_XOF                                  = "952";
        PUBLIC CONST CROATIA_CROATIAN_KUNA_HRK                                          = "191";
        PUBLIC CONST CUBA_CUBAN_PESO_CUP                                                = "192";
        PUBLIC CONST CUBA_PESO_CONVERTIBLE_CUC                                          = "931";
        PUBLIC CONST CURA_AO_NETHERLANDS_ANTILLEAN_GUILDER_ANG                          = "532";
        PUBLIC CONST CYPRUS_EURO_EUR                                                    = "978";
        PUBLIC CONST CZECH_REPUBLIC_CZECH_KORUNA_CZK                                    = "203";
        PUBLIC CONST DENMARK_DANISH_KRONE_DKK                                           = "208";
        PUBLIC CONST DJIBOUTI_DJIBOUTI_FRANC_DJF                                        = "262";
        PUBLIC CONST DOMINICA_EAST_CARIBBEAN_DOLLAR_XCD                                 = "951";
        PUBLIC CONST DOMINICAN_REPUBLIC_DOMINICAN_PESO_DOP                              = "214";
        PUBLIC CONST ECUADOR_US_DOLLAR_USD                                              = "840";
        PUBLIC CONST EGYPT_EGYPTIAN_POUND_EGP                                           = "818";
        PUBLIC CONST EL_SALVADOR_EL_SALVADOR_COLON_SVC                                  = "222";
        PUBLIC CONST EL_SALVADOR_US_DOLLAR_USD                                          = "840";
        PUBLIC CONST EQUATORIAL_GUINEA_CFA_FRANC_BEAC_XAF                               = "950";
        PUBLIC CONST ERITREA_NAKFA_ERN                                                  = "232";
        PUBLIC CONST ESTONIA_EURO_EUR                                                   = "978";
        PUBLIC CONST ETHIOPIA_ETHIOPIAN_BIRR_ETB                                        = "230";
        PUBLIC CONST EUROPEAN_UNION_EURO_EUR                                            = "978";
        PUBLIC CONST FALKLAND_ISLANDS_MALVINAS_FALKLAND_ISLANDS_POUND_FKP               = "238";
        PUBLIC CONST FAROE_ISLANDS_DANISH_KRONE_DKK                                     = "208";
        PUBLIC CONST FIJI_FIJI_DOLLAR_FJD                                               = "242";
        PUBLIC CONST FINLAND_EURO_EUR                                                   = "978";
        PUBLIC CONST FRANCE_EURO_EUR                                                    = "978";
        PUBLIC CONST FRENCH_GUIANA_EURO_EUR                                             = "978";
        PUBLIC CONST FRENCH_POLYNESIA_CFP_FRANC_XPF                                     = "953";
        PUBLIC CONST FRENCH_SOUTHERN_TERRITORIES_EURO_EUR                               = "978";
        PUBLIC CONST GABON_CFA_FRANC_BEAC_XAF                                           = "950";
        PUBLIC CONST GAMBIA_DALASI_GMD                                                  = "270";
        PUBLIC CONST GEORGIA_LARI_GEL                                                   = "981";
        PUBLIC CONST GERMANY_EURO_EUR                                                   = "978";
        PUBLIC CONST GHANA_GHANA_CEDI_GHS                                               = "936";
        PUBLIC CONST GIBRALTAR_GIBRALTAR_POUND_GIP                                      = "292";
        PUBLIC CONST GREECE_EURO_EUR                                                    = "978";
        PUBLIC CONST GREENLAND_DANISH_KRONE_DKK                                         = "208";
        PUBLIC CONST GRENADA_EAST_CARIBBEAN_DOLLAR_XCD                                  = "951";
        PUBLIC CONST GUADELOUPE_EURO_EUR                                                = "978";
        PUBLIC CONST GUAM_US_DOLLAR_USD                                                 = "840";
        PUBLIC CONST GUATEMALA_QUETZAL_GTQ                                              = "320";
        PUBLIC CONST GUERNSEY_POUND_STERLING_GBP                                        = "826";
        PUBLIC CONST GUINEA_GUINEA_FRANC_GNF                                            = "324";
        PUBLIC CONST GUINEA_BISSAU_CFA_FRANC_BCEAO_XOF                                  = "952";
        PUBLIC CONST GUYANA_GUYANA_DOLLAR_GYD                                           = "328";
        PUBLIC CONST HAITI_GOURDE_HTG                                                   = "332";
        PUBLIC CONST HAITI_US_DOLLAR_USD                                                = "840";
        PUBLIC CONST HEARD_ISLAND_AND_MCDONALD_ISLANDS_AUSTRALIAN_DOLLAR_AUD            = "036";
        PUBLIC CONST HOLY_SEE_VATICAN_CITY_STATE_EURO_EUR                               = "978";
        PUBLIC CONST HONDURAS_LEMPIRA_HNL                                               = "340";
        PUBLIC CONST HONG_KONG_HONG_KONG_DOLLAR_HKD                                     = "344";
        PUBLIC CONST HUNGARY_FORINT_HUF                                                 = "348";
        PUBLIC CONST ICELAND_ICELAND_KRONA_ISK                                          = "352";
        PUBLIC CONST INDIA_INDIAN_RUPEE_INR                                             = "356";
        PUBLIC CONST INDONESIA_RUPIAH_IDR                                               = "360";
        PUBLIC CONST IRAN_ISLAMIC_REPUBLIC_OF_IRANIAN_RIAL_IRR                          = "364";
        PUBLIC CONST IRAQ_IRAQI_DINAR_IQD                                               = "368";
        PUBLIC CONST IRELAND_EURO_EUR                                                   = "978";
        PUBLIC CONST ISLE_OF_MAN_POUND_STERLING_GBP                                     = "826";
        PUBLIC CONST ISRAEL_NEW_ISRAELI_SHEQEL_ILS                                      = "376";
        PUBLIC CONST ITALY_EURO_EUR                                                     = "978";
        PUBLIC CONST JAMAICA_JAMAICAN_DOLLAR_JMD                                        = "388";
        PUBLIC CONST JAPAN_YEN_JPY                                                      = "392";
        PUBLIC CONST JERSEY_POUND_STERLING_GBP                                          = "826";
        PUBLIC CONST JORDAN_JORDANIAN_DINAR_JOD                                         = "400";
        PUBLIC CONST KAZAKHSTAN_TENGE_KZT                                               = "398";
        PUBLIC CONST KENYA_KENYAN_SHILLING_KES                                          = "404";
        PUBLIC CONST KIRIBATI_AUSTRALIAN_DOLLAR_AUD                                     = "036";
        PUBLIC CONST KOREA_DEMOCRATIC_PEOPLEOS_REPUBLIC_OF_NORTH_KOREAN_WON_KPW         = "408";
        PUBLIC CONST KOREA_REPUBLIC_OF_WON_KRW                                          = "410";
        PUBLIC CONST KUWAIT_KUWAITI_DINAR_KWD                                           = "414";
        PUBLIC CONST KYRGYZSTAN_SOM_KGS                                                 = "417";
        PUBLIC CONST LAO_PEOPLEOS_DEMOCRATIC_REPUBLIC_KIP_LAK                           = "418";
        PUBLIC CONST LATVIA_LATVIAN_LATS_LVL                                            = "428";
        PUBLIC CONST LEBANON_LEBANESE_POUND_LBP                                         = "422";
        PUBLIC CONST LESOTHO_LOTI_LSL                                                   = "426";
        PUBLIC CONST LESOTHO_RAND_ZAR                                                   = "710";
        PUBLIC CONST LIBERIA_LIBERIAN_DOLLAR_LRD                                        = "430";
        PUBLIC CONST LIBYA_LIBYAN_DINAR_LYD                                             = "434";
        PUBLIC CONST LIECHTENSTEIN_SWISS_FRANC_CHF                                      = "756";
        PUBLIC CONST LITHUANIA_LITHUANIAN_LITAS_LTL                                     = "440";
        PUBLIC CONST LUXEMBOURG_EURO_EUR                                                = "978";
        PUBLIC CONST MACAO_PATACA_MOP                                                   = "446";
        PUBLIC CONST MACEDONIA_THE_FORMER_YUGOSLAV_REPUBLIC_OF_DENAR_MKD                = "807";
        PUBLIC CONST MADAGASCAR_MALAGASY_ARIARY_MGA                                     = "969";
        PUBLIC CONST MALAWI_KWACHA_MWK                                                  = "454";
        PUBLIC CONST MALAYSIA_MALAYSIAN_RINGGIT_MYR                                     = "458";
        PUBLIC CONST MALDIVES_RUFIYAA_MVR                                               = "462";
        PUBLIC CONST MALI_CFA_FRANC_BCEAO_XOF                                           = "952";
        PUBLIC CONST MALTA_EURO_EUR                                                     = "978";
        PUBLIC CONST MARSHALL_ISLANDS_US_DOLLAR_USD                                     = "840";
        PUBLIC CONST MARTINIQUE_EURO_EUR                                                = "978";
        PUBLIC CONST MAURITANIA_OUGUIYA_MRO                                             = "478";
        PUBLIC CONST MAURITIUS_MAURITIUS_RUPEE_MUR                                      = "480";
        PUBLIC CONST MAYOTTE_EURO_EUR                                                   = "978";
        PUBLIC CONST MEXICO_MEXICAN_PESO_MXN                                            = "484";
        PUBLIC CONST MEXICO_MEXICAN_UNIDAD_DE_INVERSION_UDI_MXV                         = "979";
        PUBLIC CONST MICRONESIA_FEDERATED_STATES_OF_US_DOLLAR_USD                       = "840";
        PUBLIC CONST MOLDOVA_REPUBLIC_OF_MOLDOVAN_LEU_MDL                               = "498";
        PUBLIC CONST MONACO_EURO_EUR                                                    = "978";
        PUBLIC CONST MONGOLIA_TUGRIK_MNT                                                = "496";
        PUBLIC CONST MONTENEGRO_EURO_EUR                                                = "978";
        PUBLIC CONST MONTSERRAT_EAST_CARIBBEAN_DOLLAR_XCD                               = "951";
        PUBLIC CONST MOROCCO_MOROCCAN_DIRHAM_MAD                                        = "504";
        PUBLIC CONST MOZAMBIQUE_MOZAMBIQUE_METICAL_MZN                                  = "943";
        PUBLIC CONST MYANMAR_KYAT_MMK                                                   = "104";
        PUBLIC CONST NAMIBIA_NAMIBIA_DOLLAR_NAD                                         = "516";
        PUBLIC CONST NAMIBIA_RAND_ZAR                                                   = "710";
        PUBLIC CONST NAURU_AUSTRALIAN_DOLLAR_AUD                                        = "036";
        PUBLIC CONST NEPAL_NEPALESE_RUPEE_NPR                                           = "524";
        PUBLIC CONST NETHERLANDS_EURO_EUR                                               = "978";
        PUBLIC CONST NEW_CALEDONIA_CFP_FRANC_XPF                                        = "953";
        PUBLIC CONST NEW_ZEALAND_NEW_ZEALAND_DOLLAR_NZD                                 = "554";
        PUBLIC CONST NICARAGUA_CORDOBA_ORO_NIO                                          = "558";
        PUBLIC CONST NIGER_CFA_FRANC_BCEAO_XOF                                          = "952";
        PUBLIC CONST NIGERIA_NAIRA_NGN                                                  = "566";
        PUBLIC CONST NIUE_NEW_ZEALAND_DOLLAR_NZD                                        = "554";
        PUBLIC CONST NORFOLK_ISLAND_AUSTRALIAN_DOLLAR_AUD                               = "036";
        PUBLIC CONST NORTHERN_MARIANA_ISLANDS_US_DOLLAR_USD                             = "840";
        PUBLIC CONST NORWAY_NORWEGIAN_KRONE_NOK                                         = "578";
        PUBLIC CONST OMAN_RIAL_OMANI_OMR                                                = "512";
        PUBLIC CONST PAKISTAN_PAKISTAN_RUPEE_PKR                                        = "586";
        PUBLIC CONST PALAU_US_DOLLAR_USD                                                = "840";
        PUBLIC CONST PANAMA_BALBOA_PAB                                                  = "590";
        PUBLIC CONST PANAMA_US_DOLLAR_USD                                               = "840";
        PUBLIC CONST PAPUA_NEW_GUINEA_KINA_PGK                                          = "598";
        PUBLIC CONST PARAGUAY_GUARANI_PYG                                               = "600";
        PUBLIC CONST PERU_NUEVO_SOL_PEN                                                 = "604";
        PUBLIC CONST PHILIPPINES_PHILIPPINE_PESO_PHP                                    = "608";
        PUBLIC CONST PITCAIRN_NEW_ZEALAND_DOLLAR_NZD                                    = "554";
        PUBLIC CONST POLAND_ZLOTY_PLN                                                   = "985";
        PUBLIC CONST PORTUGAL_EURO_EUR                                                  = "978";
        PUBLIC CONST PUERTO_RICO_US_DOLLAR_USD                                          = "840";
        PUBLIC CONST QATAR_QATARI_RIAL_QAR                                              = "634";
        PUBLIC CONST RFUNION_EURO_EUR                                                   = "978";
        PUBLIC CONST ROMANIA_NEW_ROMANIAN_LEU_RON                                       = "946";
        PUBLIC CONST RUSSIAN_FEDERATION_RUSSIAN_RUBLE_RUB                               = "643";
        PUBLIC CONST RWANDA_RWANDA_FRANC_RWF                                            = "646";
        PUBLIC CONST SAINT_BARTHFLEMY_EURO_EUR                                          = "978";
        PUBLIC CONST SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA_SAINT_HELENA_POUND_SHP = "654";
        PUBLIC CONST SAINT_KITTS_AND_NEVIS_EAST_CARIBBEAN_DOLLAR_XCD                    = "951";
        PUBLIC CONST SAINT_LUCIA_EAST_CARIBBEAN_DOLLAR_XCD                              = "951";
        PUBLIC CONST SAINT_MARTIN_FRENCH_PART_EURO_EUR                                  = "978";
        PUBLIC CONST SAINT_PIERRE_AND_MIQUELON_EURO_EUR                                 = "978";
        PUBLIC CONST SAINT_VINCENT_AND_THE_GRENADINES_EAST_CARIBBEAN_DOLLAR_XCD         = "951";
        PUBLIC CONST SAMOA_TALA_WST                                                     = "882";
        PUBLIC CONST SAN_MARINO_EURO_EUR                                                = "978";
        PUBLIC CONST SAO_TOME_AND_PRINCIPE_DOBRA_STD                                    = "678";
        PUBLIC CONST SAUDI_ARABIA_SAUDI_RIYAL_SAR                                       = "682";
        PUBLIC CONST SENEGAL_CFA_FRANC_BCEAO_XOF                                        = "952";
        PUBLIC CONST SERBIA_SERBIAN_DINAR_RSD                                           = "941";
        PUBLIC CONST SEYCHELLES_SEYCHELLES_RUPEE_SCR                                    = "690";
        PUBLIC CONST SIERRA_LEONE_LEONE_SLL                                             = "694";
        PUBLIC CONST SINGAPORE_SINGAPORE_DOLLAR_SGD                                     = "702";
        PUBLIC CONST SINT_MAARTEN_DUTCH_PART_NETHERLANDS_ANTILLEAN_GUILDER_ANG          = "532";
        PUBLIC CONST SLOVAKIA_EURO_EUR                                                  = "978";
        PUBLIC CONST SLOVENIA_EURO_EUR                                                  = "978";
        PUBLIC CONST SOLOMON_ISLANDS_SOLOMON_ISLANDS_DOLLAR_SBD                         = "090";
        PUBLIC CONST SOMALIA_SOMALI_SHILLING_SOS                                        = "706";
        PUBLIC CONST SOUTH_AFRICA_RAND_ZAR                                              = "710";
        PUBLIC CONST SOUTH_SUDAN_SOUTH_SUDANESE_POUND_SSP                               = "728";
        PUBLIC CONST SPAIN_EURO_EUR                                                     = "978";
        PUBLIC CONST SRI_LANKA_SRI_LANKA_RUPEE_LKR                                      = "144";
        PUBLIC CONST SUDAN_SUDANESE_POUND_SDG                                           = "938";
        PUBLIC CONST SURINAME_SURINAM_DOLLAR_SRD                                        = "968";
        PUBLIC CONST SVALBARD_AND_JAN_MAYEN_NORWEGIAN_KRONE_NOK                         = "578";
        PUBLIC CONST SWAZILAND_LILANGENI_SZL                                            = "748";
        PUBLIC CONST SWEDEN_SWEDISH_KRONA_SEK                                           = "752";
        PUBLIC CONST SWITZERLAND_SWISS_FRANC_CHF                                        = "756";
        PUBLIC CONST SWITZERLAND_WIR_EURO_CHE                                           = "947";
        PUBLIC CONST SWITZERLAND_WIR_FRANC_CHW                                          = "948";
        PUBLIC CONST SYRIAN_ARAB_REPUBLIC_SYRIAN_POUND_SYP                              = "760";
        PUBLIC CONST TAIWAN_PROVINCE_OF_CHINA_NEW_TAIWAN_DOLLAR_TWD                     = "901";
        PUBLIC CONST TAJIKISTAN_SOMONI_TJS                                              = "972";
        PUBLIC CONST TANZANIA_UNITED_REPUBLIC_OF_TANZANIAN_SHILLING_TZS                 = "834";
        PUBLIC CONST THAILAND_BAHT_THB                                                  = "764";
        PUBLIC CONST TIMOR_LESTE_US_DOLLAR_USD                                          = "840";
        PUBLIC CONST TOGO_CFA_FRANC_BCEAO_XOF                                           = "952";
        PUBLIC CONST TOKELAU_NEW_ZEALAND_DOLLAR_NZD                                     = "554";
        PUBLIC CONST TONGA_PAOANGA_TOP                                                  = "776";
        PUBLIC CONST TRINIDAD_AND_TOBAGO_TRINIDAD_AND_TOBAGO_DOLLAR_TTD                 = "780";
        PUBLIC CONST TUNISIA_TUNISIAN_DINAR_TND                                         = "788";
        PUBLIC CONST TURKEY_TURKISH_LIRA_TRY                                            = "949";
        PUBLIC CONST TURKMENISTAN_TURKMENISTAN_NEW_MANAT_TMT                            = "934";
        PUBLIC CONST TURKS_AND_CAICOS_ISLANDS_US_DOLLAR_USD                             = "840";
        PUBLIC CONST TUVALU_AUSTRALIAN_DOLLAR_AUD                                       = "036";
        PUBLIC CONST UGANDA_UGANDA_SHILLING_UGX                                         = "800";
        PUBLIC CONST UKRAINE_HRYVNIA_UAH                                                = "980";
        PUBLIC CONST UNITED_ARAB_EMIRATES_UAE_DIRHAM_AED                                = "784";
        PUBLIC CONST UNITED_KINGDOM_POUND_STERLING_GBP                                  = "826";
        PUBLIC CONST UNITED_STATES_US_DOLLAR_USD                                        = "840";
        PUBLIC CONST UNITED_STATES_US_DOLLAR_NEXT_DAY_USN                               = "997";
        PUBLIC CONST UNITED_STATES_US_DOLLAR_SAME_DAY_USS                               = "998";
        PUBLIC CONST UNITED_STATES_MINOR_OUTLYING_ISLANDS_US_DOLLAR_USD                 = "840";
        PUBLIC CONST URUGUAY_PESO_URUGUAYO_UYU                                          = "858";
        PUBLIC CONST URUGUAY_URUGUAY_PESO_EN_UNIDADES_INDEXADAS_URUIURUI_UYI            = "940";
        PUBLIC CONST UZBEKISTAN_UZBEKISTAN_SUM_UZS                                      = "860";
        PUBLIC CONST VANUATU_VATU_VUV                                                   = "548";
        PUBLIC CONST VATICAN_CITY_STATE_HOLY_SEE_EURO_EUR                               = "978";
        PUBLIC CONST VENEZUELA_BOLIVARIAN_REPUBLIC_OF_BOLIVAR_FUERTE_VEF                = "937";
        PUBLIC CONST VIET_NAM_DONG_VND                                                  = "704";
        PUBLIC CONST VIRGIN_ISLANDS_BRITISH_US_DOLLAR_USD                               = "840";
        PUBLIC CONST VIRGIN_ISLANDS_US_US_DOLLAR_USD                                    = "840";
        PUBLIC CONST WALLIS_AND_FUTUNA_CFP_FRANC_XPF                                    = "953";
        PUBLIC CONST WESTERN_SAHARA_MOROCCAN_DIRHAM_MAD                                 = "504";
        PUBLIC CONST YEMEN_YEMENI_RIAL_YER                                              = "886";
        PUBLIC CONST ZAMBIA_ZAMBIAN_KWACHA_ZMK                                          = "894";
        PUBLIC CONST ZIMBABWE_ZIMBABWE_DOLLAR_ZWL                                       = "932";
    }