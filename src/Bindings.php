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
		Air\AirPrePayReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirPrePayBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\FlightDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightDetailsBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'FlightService',
		],
		Air\LowFareSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirLowFareSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\LowFareSearchAsynchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirLowFareSearchAsynchBinding.wsdl',
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
		Air\AvailabilitySearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirAvailabilitySearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirRepriceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRepriceSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirPriceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirPriceBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirTicketingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirTicketingBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirExchangeQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirExchangeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeProcessBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirExchangeTicketingReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeTicketingBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirRefundReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRefundTicketBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirRefundQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRefundQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirFareDisplayReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirFareDisplayBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirFareRulesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirFareRulesBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\SeatMapReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/SeatMapBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirVoidDocumentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirVoidDocumentBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirRetrieveDocumentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirRetrieveDocumentBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirMerchandisingOfferAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirMerchandisingOfferAvailabilityBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirUpsellSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirUpsellSearchBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\FlightInformationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightInfoBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'FlightService',
		],
		Air\FlightTimeTableReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/FlightTimeTableBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\EMDIssuanceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/EMDIssuanceBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirMerchandisingDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirMerchandisingDetailsBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirExchangeEligibilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeEligibilityBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\EMDRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/EMDRetrieveBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Air\AirExchangeMultiQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/air_v47_0/AirExchangeMultiQuoteBinding.wsdl',
			'service' => Air\AirService::class,
			'url' => 'AirService',
		],
		Rail\RailAvailabilitySearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailAvailabilitySearchBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RailRefundQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailRefundQuoteBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RailRefundReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailRefundBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RailExchangeQuoteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailExchangeQuoteBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RailExchangeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailExchangeCreateReservationBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Rail\RailSeatMapReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/rail_v47_0/RailSeatMapBinding.wsdl',
			'service' => Rail\RailService::class,
			'url' => 'RailService',
		],
		Hotel\HotelSearchAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSearchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelSearchAvailabilityAsynchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSearchAvailabilityAsynchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelMediaLinksReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelMediaLinksServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelDetailsServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelRetrieveServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelRulesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelRulesServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelUpsellDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelUpsellSearchServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelKeywordReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelKeywordsServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\HotelSuperShopperReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/HotelSuperShopperServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Hotel\RetrieveHotelSearchAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/hotel_v47_0/RetrieveHotelSearchAvailabilityServiceBinding.wsdl',
			'service' => Hotel\HotelService::class,
			'url' => 'HotelService',
		],
		Vehicle\VehicleSearchAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleSearchServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleRetrieveServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleLocationDetailReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleLocationDetailBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleRulesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleRulesServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleKeywordReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleKeywordsServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleLocationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleLocationServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleUpsellSearchAvailabilityReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleUpsellSearchServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
		],
		Vehicle\VehicleMediaLinksReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/vehicle_v47_0/VehicleMediaLinksServiceBinding.wsdl',
			'service' => Vehicle\VehicleService::class,
			'url' => 'VehicleService',
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
		System\SystemInfoReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/SystemInfoBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'SystemService',
		],
		System\ExternalCacheAccessReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/system_v32_0/ExternalCacheAccessBinding.wsdl',
			'service' => System\SystemService::class,
			'url' => 'ExternalCacheAccessService',
		],
		GDSQueue\GdsQueueCountReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueCountServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsQueueListReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueListServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsQueuePlaceReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueuePlaceServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsEnterQueueReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsEnterQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsExitQueueReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsExitQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsNextOnQueueReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsNextOnQueueServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsQueueRemoveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueRemoveServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueService',
		],
		GDSQueue\GdsQueueAgentListReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/gdsQueue_v47_0/GdsQueueAgentListServiceBinding.wsdl',
			'service' => GDSQueue\GDSQueueService::class,
			'url' => 'GdsQueueAgentListService',
		],
		Terminal\TerminalReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/TerminalServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		Terminal\CreateTerminalSessionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/CreateTerminalSessionServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		Terminal\EndTerminalSessionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/terminal_v33_0/EndTerminalSessionServiceBinding.wsdl',
			'service' => Terminal\TerminalService::class,
			'url' => 'TerminalService',
		],
		UniversalRecord\UniversalRecordRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordRetrieveServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\UniversalRecordHistorySearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordHistorySearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordHistorySearchService',
		],
		UniversalRecord\UniversalRecordSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordSearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\AckScheduleChangeReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AckScheduleChangeServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'ScheduleChangeService',
		],
		UniversalRecord\UniversalRecordImportReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordImportServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\UniversalRecordModifyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordModifyServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\UniversalRecordCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/UniversalRecordCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\ProviderReservationDisplayDetailsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/ProviderReservationDisplayServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'ProviderReservationDisplayService',
		],
		UniversalRecord\ProviderReservationDivideReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/ProviderReservationDivideServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'UniversalRecordService',
		],
		UniversalRecord\SavedTripCreateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripCreateServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripCreateService',
		],
		UniversalRecord\SavedTripModifyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripModifyServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripModifyService',
		],
		UniversalRecord\SavedTripRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripRetrieveServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripRetrieveService',
		],
		UniversalRecord\SavedTripDeleteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripDeleteServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripDeleteService',
		],
		UniversalRecord\SavedTripSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/SavedTripSearchServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'SavedTripSearchService',
		],
		UniversalRecord\VehicleCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/VehicleReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'VehicleService',
		],
		UniversalRecord\VehicleCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/VehicleCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'VehicleService',
		],
		UniversalRecord\HotelCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/HotelReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'HotelService',
		],
		UniversalRecord\HotelCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/HotelCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'HotelService',
		],
		UniversalRecord\RailCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/RailCreateReservationBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'RailService',
		],
		UniversalRecord\AirCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirCreateReservationBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\AirCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirCancelBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\AirMerchandisingFulfillmentReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/AirMerchandisingFulfillmentBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'AirService',
		],
		UniversalRecord\PassiveCreateReservationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/PassiveReservationServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'PassiveService',
		],
		UniversalRecord\PassiveCancelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/universal_v47_0/PassiveCancelServiceBinding.wsdl',
			'service' => UniversalRecord\UniversalRecordService::class,
			'url' => 'PassiveService',
		],
		UProfile\ProfileCreateFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteHierarchyLevelReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteHierarchyLevelBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveHierarchyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveHierarchyBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchActionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchActionBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveActionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveActionBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchFieldReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchFieldBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileCreateTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileCreateTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyTemplateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyTemplateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileChildSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileChildSearchBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveTemplateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveTemplateBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileSearchTagsReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileSearchTagsBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveBridgeBranchesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveBridgeBranchesBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileModifyBridgeBranchesReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileModifyBridgeBranchesBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileRetrieveHistoryReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileRetrieveHistoryBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\ProfileDeleteTagReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/ProfileDeleteTagBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		UProfile\SingleProfileMigrationReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/uprofile_v37_0/SingleProfileMigrationBinding.wsdl',
			'service' => UProfile\UProfileService::class,
			'url' => 'UProfileService',
		],
		Util\CreditCardAuthReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UtilCreditCardAuthBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'CreditCardAuthorizationService',
		],
		Util\CreateAgencyFeeMcoReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoCreateAgencyFeeBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\McoVoidReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoVoidBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\MirReportRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReportRetrieveBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\McoSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/McoSearchBinding.wsdl',
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
		Util\CurrencyConversionReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UtilCurrencyConversionBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'CurrencyConversionService',
		],
		Util\ReferenceDataRetrieveReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataRetrieveBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\ReferenceDataSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataLookupBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'ReferenceDataLookupService',
		],
		Util\ReferenceDataUpdateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/ReferenceDataUpdateBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UtilService',
		],
		Util\UpsellAdminReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UpsellAdminBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UpsellAdminService',
		],
		Util\BrandedFareAdminReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/BrandedFareAdminBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'BrandedFareService',
		],
		Util\UpsellSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/UpsellAdminSearchBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'UpsellAdminSearchService',
		],
		Util\BrandedFareSearchReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/BrandedFareSearchBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'BrandedFareService',
		],
		Util\AgencyServiceFeeCreateReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/AgencyCreateServiceFeeBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'AgencyFeeService',
		],
		Util\FindEmployeesOnFlightReq::class => [
			'wsdl' => __DIR__ . '/Wsdls/util_v47_0/FindEmployeesOnFlightServiceBinding.wsdl',
			'service' => Util\UtilService::class,
			'url' => 'FindEmployeesOnFlightService',
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
