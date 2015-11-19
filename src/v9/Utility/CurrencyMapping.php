<?php
namespace BingAds\v9\Utility;
use BingAds\v9\CustomerManagement\CurrencyType;

/**
 * Class CurrencyMapping
 *
 * @package BingAds\v9\Utility
 */
class CurrencyMapping {

/**
 * @var array
 */
	public static $currencies = [
		CurrencyType::ArgentinePeso => "ARS",
		CurrencyType::AustralianDollar => "AUD",
		CurrencyType::Baht => "THB",
		CurrencyType::Bolivar => "VEF",
		CurrencyType::BrazilianReal => "BRL",
		CurrencyType::CanadianDollar => "CAD",
		CurrencyType::ChileanPeso => "CLP",
		CurrencyType::ColombianPeso => "COP",
		CurrencyType::DanishKrone => "DKK",
		CurrencyType::Euro => "EUR",
		CurrencyType::HongKongDollar => "HKD",
		CurrencyType::IndianRupee => "INR",
		CurrencyType::MalaysianRinggit => "MYR",
		CurrencyType::MexicanPeso => "MXN",
		CurrencyType::NewTaiwanDollar => "TWD",
		CurrencyType::NewZealandDollar => "NZD",
		CurrencyType::NorwegianKrone => "NOK",
		CurrencyType::NuevoSol => "PEN",
		CurrencyType::PhilippinePeso => "PHP",
		CurrencyType::Rupiah => "IDR",
		CurrencyType::SingaporeDollar => "SGD",
		CurrencyType::SwedishKrona => "SEK",
		CurrencyType::SwissFranc => "CHF",
		CurrencyType::UKPound => "GBP",
		CurrencyType::USDollar => "USD",
		CurrencyType::JapaneseYen => "JPY",
		CurrencyType::CzechKoruna => "CZK",
		CurrencyType::Zloty => "PLN",
		CurrencyType::Croatiankuna => "HRK",
		CurrencyType::RussianRuble => "RUB",
		CurrencyType::TurkishLira => "TRY",
		CurrencyType::Lev => "BGN",
		CurrencyType::NewIsraeliSheqel => "ILS",
		CurrencyType::Won => "KRW",
		CurrencyType::SouthAfricanRand => "ZAR",
		CurrencyType::IcelandKrona => "ISK"

	];

}