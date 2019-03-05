<?php

namespace FilippoToso\Travelport;

use FilippoToso\Travelport\Exceptions\MissingBindingsException;

use FilippoToso\Travelport\Air;
use FilippoToso\Travelport\Rail;
use FilippoToso\Travelport\Hotel;
use FilippoToso\Travelport\Vehicle;
use FilippoToso\Travelport\System;
use FilippoToso\Travelport\GDSQueue;
use FilippoToso\Travelport\Terminal;
use FilippoToso\Travelport\UniversalRecord;
use FilippoToso\Travelport\UProfile;
use FilippoToso\Travelport\Util;

class Bindings
{
    protected static $bindings = [
		Air\AvailabilitySearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirAvailabilitySearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ExchangeEligibilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeEligibilityBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ExchangeMultiQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeMultiQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ExchangeProcessReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeProcessBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ExchangeQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ExchangeTicketingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeTicketingBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\FareDisplayReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirFareDisplayBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\FareRulesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirFareRulesBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\LowFareSearchAsynchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirLowFareSearchAsynchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\LowFareSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirLowFareSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\MerchandisingDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirMerchandisingDetailsBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\MerchandisingOfferAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirMerchandisingOfferAvailabilityBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\PrePayReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirPrePayBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\PriceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirPriceBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\RefundQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRefundQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\RefundTicketReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRefundTicketBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\RepriceSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRepriceSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\RetrieveDocumentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRetrieveDocumentBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\RetrieveLowFareSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRetrieveLowFareSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\ScheduleSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirScheduleSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\TicketingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirTicketingBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\UpsellSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirUpsellSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\VoidDocumentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirVoidDocumentBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\EMDIssuanceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/EMDIssuanceBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\EMDRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/EMDRetrieveBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\FlightDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightDetailsBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'FlightService',
		],
		Air\FlightInfoReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightInfoBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'FlightService',
		],
		Air\FlightTimeTableReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightTimeTableBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\SeatMapReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/SeatMapBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Rail\AvailabilitySearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailAvailabilitySearchBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\ExchangeCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailExchangeCreateReservationBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\ExchangeQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailExchangeQuoteBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RefundReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailRefundBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RefundQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailRefundQuoteBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\SeatMapReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailSeatMapBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Hotel\DetailsServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelDetailsServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\KeywordsServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelKeywordsServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\MediaLinksServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelMediaLinksServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\RetrieveServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelRetrieveServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\RulesServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelRulesServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\SearchAvailabilityAsynchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSearchAvailabilityAsynchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\SearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSearchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\SuperShopperServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSuperShopperServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\UpsellSearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelUpsellSearchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\RetrieveHotelSearchAvailabilityServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/RetrieveHotelSearchAvailabilityServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Vehicle\KeywordsServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleKeywordsServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\LocationDetailReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleLocationDetailBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\LocationServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleLocationServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\MediaLinksServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleMediaLinksServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\RetrieveServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleRetrieveServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\RulesServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleRulesServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\SearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleSearchServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\UpsellSearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleUpsellSearchServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		System\ExternalCacheAccessReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/ExternalCacheAccessBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'ExternalCacheAccessService',
		],
		System\InfoReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemInfoBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\PingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemPingBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\TimeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemTimeBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		GDSQueue\GdsEnterQueueServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsEnterQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsExitQueueServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsExitQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsNextOnQueueServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsNextOnQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\AgentListServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueAgentListServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueAgentListService',
		],
		GDSQueue\CountServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueCountServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\ListServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueListServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\PlaceServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueuePlaceServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\RemoveServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueRemoveServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		Terminal\CreateTerminalSessionServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/CreateTerminalSessionServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		Terminal\EndTerminalSessionServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/EndTerminalSessionServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		Terminal\ServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/TerminalServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		UniversalRecord\AckScheduleChangeServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AckScheduleChangeServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'ScheduleChangeService',
		],
		UniversalRecord\AirCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirCancelBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\AirCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirCreateReservationBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\AirMerchandisingFulfillmentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirMerchandisingFulfillmentBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\HotelCancelServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/HotelCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'HotelService',
		],
		UniversalRecord\HotelReservationServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/HotelReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'HotelService',
		],
		UniversalRecord\PassiveCancelServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/PassiveCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'PassiveService',
		],
		UniversalRecord\PassiveReservationServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/PassiveReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'PassiveService',
		],
		UniversalRecord\ProviderReservationDisplayServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/ProviderReservationDisplayServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'ProviderReservationDisplayService',
		],
		UniversalRecord\ProviderReservationDivideServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/ProviderReservationDivideServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\RailCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/RailCreateReservationBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'RailService',
		],
		UniversalRecord\SavedTripCreateServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripCreateServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripCreateService',
		],
		UniversalRecord\SavedTripDeleteServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripDeleteServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripDeleteService',
		],
		UniversalRecord\SavedTripModifyServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripModifyServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripModifyService',
		],
		UniversalRecord\SavedTripRetrieveServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripRetrieveServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripRetrieveService',
		],
		UniversalRecord\SavedTripSearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripSearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripSearchService',
		],
		UniversalRecord\CancelServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\HistorySearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordHistorySearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordHistorySearchService',
		],
		UniversalRecord\ImportServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordImportServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\ModifyServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordModifyServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\RetrieveServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordRetrieveServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\SearchServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordSearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\VehicleCancelServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/VehicleCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'VehicleService',
		],
		UniversalRecord\VehicleReservationServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/VehicleReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'VehicleService',
		],
		UProfile\ProfileChildSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileChildSearchBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteTagReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteTagBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyBridgeBranchesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyBridgeBranchesBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyTemplateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyTemplateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveActionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveActionBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveBridgeBranchesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveBridgeBranchesBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveHierarchyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveHierarchyBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveHistoryReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveHistoryBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveTemplateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveTemplateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchActionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchActionBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\SingleProfileMigrationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/SingleProfileMigrationBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		Util\AgencyCreateServiceFeeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/AgencyCreateServiceFeeBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'AgencyFeeService',
		],
		Util\BrandedFareAdminReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/BrandedFareAdminBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'BrandedFareService',
		],
		Util\BrandedFareSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/BrandedFareSearchBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'BrandedFareService',
		],
		Util\CalculateTaxReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/CalculateTaxBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\ContentProviderRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ContentProviderRetrieveBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\FindEmployeesOnFlightServiceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/FindEmployeesOnFlightServiceBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'FindEmployeesOnFlightService',
		],
		Util\McoCreateAgencyFeeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoCreateAgencyFeeBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\McoSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoSearchBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\McoVoidReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoVoidBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\MctCountReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/MctCountBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\MctLookupReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/MctLookupBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\ReferenceDataLookupReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataLookupBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'ReferenceDataLookupService',
		],
		Util\ReferenceDataRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataRetrieveBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\ReferenceDataUpdateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataUpdateBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\ReportRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReportRetrieveBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\UpsellAdminReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UpsellAdminBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UpsellAdminService',
		],
		Util\UpsellAdminSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UpsellAdminSearchBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UpsellAdminSearchService',
		],
		Util\CreditCardAuthReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UtilCreditCardAuthBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'CreditCardAuthorizationService',
		],
		Util\CurrencyConversionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UtilCurrencyConversionBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'CurrencyConversionService',
		],

    ];

    public static function get($class = null)
    {
        if (is_null($class)) {
            return static::$bindings;
        }

        if (!static::has($class)) {
            throw new MissingBindingsException('Missing binding: ' . $class);
        }

        return static::$bindings[$class];
    }

    public static function has($class)
    {
        return isset(static::$bindings[$class]);
    }
}
