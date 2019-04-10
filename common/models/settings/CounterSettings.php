<?php
namespace common\models\settings;

use GuzzleHttp\Exception\GuzzleException;
use Yii;
use phpQuery;
use GuzzleHttp\Client;

class CounterSettings extends Settings
{
	const WEBSITE = 'http://shark-taxi.com';

	const HTML_SELECTOR = 'div.driver-info-culc:eq(0) p span';

	private static $modelAttributes = [
		'days',
		'trips',
		'customers',
		'drivers',
	];

	public static $SECTION = 'CounterSettings';

	public $days;
	public $trips;
	public $customers;
	public $drivers;

	public function attributeLabels()
	{
		return [
			'days' => 'дней работы',
			'trips' => 'успешных поездок',
			'customers' => 'клиентов',
			'drivers' => 'водителей',
		];
	}

	public function rules()
	{
		return [
			[['days', 'trips', 'customers', 'drivers'], 'string', 'max' => 50]
		];
	}

	public function init()
	{
		parent::init();

		$settings = Yii::$app->settings;

		$this->days = $settings->get( 'days', self::$SECTION);
		$this->trips = $settings->get( 'trips', self::$SECTION);
		$this->customers = $settings->get( 'customers', self::$SECTION);
		$this->drivers = $settings->get( 'drivers', self::$SECTION);
	}

	public function save()
	{
		$settings = Yii::$app->settings;

		$settings->set( 'days', $this->days, self::$SECTION, 'string');
		$settings->set( 'trips', $this->trips, self::$SECTION, 'string');
		$settings->set( 'customers', $this->customers, self::$SECTION, 'string');
		$settings->set( 'drivers', $this->drivers, self::$SECTION, 'string');

		return true;
	}

	public function parseCounterData()
	{
		$client = new Client();

		try {
			$res = $client->request( 'GET', self::WEBSITE );
		} catch ( GuzzleException $e ) {
			return;
		}

		$body = $res->getBody();

		$document = phpQuery::newDocumentHTML($body);

		$result = $document->find(self::HTML_SELECTOR);

		$modelData = [];

		foreach($result->elements as $k => $element) {
			$modelData[self::$modelAttributes[$k]] = trim($element->textContent);
		}

		return $modelData;
	}

}