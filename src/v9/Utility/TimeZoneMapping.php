<?php
namespace BingAds\v9\Utility;
use BingAds\v9\CustomerManagement\TimeZoneType;

/**
 * Class TimeZoneMapping
 *
 * @package BingAds\v9\Utility
 */
class TimeZoneMapping {

/**
 * @var array
 */
	public static $timeZones = [
		TimeZoneType::AbuDhabiMuscat => 'Asia/Muscat',
		TimeZoneType::Adelaide => 'Australia/Adelaide',
		TimeZoneType::Alaska => 'America/Anchorage',
		TimeZoneType::AlmatyNovosibirsk => 'Asia/Almaty',
		TimeZoneType::AmsterdamBerlinBernRomeStockholmVienna => 'Europe/Amsterdam',
		TimeZoneType::Arizona => 'America/Boise',
		TimeZoneType::AstanaDhaka => 'Asia/Dhaka',
		TimeZoneType::AthensBuckarestIstanbul => 'Europe/Athens',
		TimeZoneType::AtlanticTimeCanada => 'Atlantic/Bermuda',
		TimeZoneType::AucklandWellington => 'Asia/Anadyr',
		TimeZoneType::Azores => 'America/Scoresbysund',
		TimeZoneType::Baghdad => 'Africa/Asmara',
		TimeZoneType::BakuTbilisiYerevan => 'Asia/Baku',
		TimeZoneType::BangkokHanoiJakarta => 'Asia/Bangkok',
		TimeZoneType::BeijingChongqingHongKongUrumqi => 'Asia/Brunei',
		TimeZoneType::BelgradeBratislavaBudapestLjubljanaPrague => 'Europe/Budapest',
		TimeZoneType::BogotaLimaQuito => 'America/Lima',
		TimeZoneType::Brasilia => 'America/Araguaina',
		TimeZoneType::Brisbane => 'Australia/Brisbane',
		TimeZoneType::BrusselsCopenhagenMadridParis => 'Europe/Budapest',
		TimeZoneType::Bucharest => 'Europe/Bucharest',
		TimeZoneType::BuenosAiresGeorgetown => 'America/Araguaina',
		TimeZoneType::Cairo => 'Europe/Bucharest',
		TimeZoneType::CanberraMelbourneSydney => 'Australia/Brisbane',
		TimeZoneType::CapeVerdeIsland => 'America/Scoresbysund',
		TimeZoneType::CaracasLaPaz => 'America/Caracas',
		TimeZoneType::CasablancaMonrovia => 'Africa/Casablanca',
		TimeZoneType::CentralAmerica => 'America/Chicago',
		TimeZoneType::CentralTimeUSCanada => 'America/Chicago',
		TimeZoneType::ChennaiKolkataMumbaiNewDelhi => 'Asia/Kolkata',
		TimeZoneType::ChihuahuaLaPazMazatlan => 'America/Chihuahua',
		TimeZoneType::Darwin => 'Australia/Darwin',
		TimeZoneType::EasternTimeUSCanada => 'America/Lima',
		TimeZoneType::Ekaterinburg => 'Asia/Yekaterinburg',
		TimeZoneType::FijiKamchatkaMarshallIsland => 'Asia/Kamchatka',
		TimeZoneType::Greenland => 'America/Araguaina',
		TimeZoneType::GreenwichMeanTimeDublinEdinburghLisbonLondon => 'Africa/Casablanca',
		TimeZoneType::GuadalajaraMexicoCityMonterrey => 'America/Chicago',
		TimeZoneType::GuamPortMoresby => 'Australia/Brisbane',
		TimeZoneType::HararePretoria => 'Europe/Bucharest',
		TimeZoneType::Hawaii => 'America/Adak',
		TimeZoneType::HelsinkiKyivRigaSofiaTallinnVilnius => 'Europe/Amsterdam',
		TimeZoneType::Hobart => 'Australia/Brisbane',
		TimeZoneType::IndianaEast => 'America/Lima',
		TimeZoneType::InternationalDatelineWest => 'GMT-12',
		TimeZoneType::IrkutskUlaanBataar => 'Asia/Brunei',
		TimeZoneType::IslamabadKarachiTashkent => 'Asia/Yekaterinburg',
		TimeZoneType::Jerusalem => 'Europe/Bucharest',
		TimeZoneType::Kabul => 'Asia/Kabul',
		TimeZoneType::Kathmandu => 'Asia/Kathmandu',
		TimeZoneType::Krasnoyarsk => 'Asia/Bangkok',
		TimeZoneType::KualaLumpurSingapore => 'Asia/Brunei',
		TimeZoneType::KuwaitRiyadh => 'Africa/Asmara',
		TimeZoneType::MagadanSolomonIslandNewCaledonia => 'Antarctica/Macquarie',
		TimeZoneType::MidAtlantic => 'America/Noronha',
		TimeZoneType::MidwayIslandAndSamoa => 'Pacific/Midway',
		TimeZoneType::MoscowStPetersburgVolgograd => 'Africa/Asmara',
		TimeZoneType::MountainTimeUSCanada => 'America/Chihuahua',
		// Not defined in TimeZoneType yet returned by the API :).
		'MountainTime_US_Canada' => 'America/Chihuahua',
		TimeZoneType::Nairobi => 'Africa/Asmara',
		TimeZoneType::Newfoundland => 'America/St_Johns',
		TimeZoneType::Nukualofa => 'Antarctica/McMurdo',
		TimeZoneType::OsakaSapporoTokyo => 'Asia/Jayapura',
		TimeZoneType::PacificTimeUSCanadaTijuana => 'America/Dawson',
		TimeZoneType::Perth => 'Asia/Brunei',
		TimeZoneType::Rangoon => 'Asia/Rangoon',
		TimeZoneType::Santiago => 'America/Anguilla',
		TimeZoneType::SarajevoSkopjeWarsawZagreb => 'Europe/Budapest',
		TimeZoneType::Saskatchewan => 'America/Chicago',
		TimeZoneType::Seoul => 'Asia/Jayapura',
		TimeZoneType::SriJayawardenepura => 'Asia/Kolkata',
		TimeZoneType::Taipei => 'Asia/Brunei',
		TimeZoneType::Tehran => 'Asia/Tehran',
		TimeZoneType::Vladivostok => 'Australia/Brisbane',
		TimeZoneType::WestCentralAfrica => 'Europe/Budapest',
		TimeZoneType::Yakutsk => 'Asia/Jayapura',
	];

}