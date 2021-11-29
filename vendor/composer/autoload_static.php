<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit70778bcb3841274af4cc70b093cb0596
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\TEC\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\TEC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WPGraphQL\\TEC\\Abstracts\\DataHelper' => __DIR__ . '/../..' . '/src/Abstracts/DataHelper.php',
        'WPGraphQL\\TEC\\Common\\TypeRegistry' => __DIR__ . '/../..' . '/src/Common/TypeRegistry.php',
        'WPGraphQL\\TEC\\Common\\Type\\Enum\\TimezoneModeEnum' => __DIR__ . '/../..' . '/src/Common/Type/Enum/TimezoneModeEnum.php',
        'WPGraphQL\\TEC\\Common\\Type\\WPInterface\\NodeWithJsonLd' => __DIR__ . '/../..' . '/src/Common/Type/WPInterface/NodeWithJsonLd.php',
        'WPGraphQL\\TEC\\Common\\Type\\WPObject\\EventLinkedData' => __DIR__ . '/../..' . '/src/Common/Type/WPObject/EventLinkedData.php',
        'WPGraphQL\\TEC\\Common\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Common/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Events\\Connection\\Events' => __DIR__ . '/../..' . '/src/Events/Connection/Events.php',
        'WPGraphQL\\TEC\\Events\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/Events/CoreSchemaFilters.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\EventConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/EventConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\OrganizerConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/OrganizerConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\Connection\\VenueConnectionResolver' => __DIR__ . '/../..' . '/src/Events/Data/Connection/VenueConnectionResolver.php',
        'WPGraphQL\\TEC\\Events\\Data\\EventHelper' => __DIR__ . '/../..' . '/src/Events/Data/EventHelper.php',
        'WPGraphQL\\TEC\\Events\\Data\\Factory' => __DIR__ . '/../..' . '/src/Events/Data/Factory.php',
        'WPGraphQL\\TEC\\Events\\Data\\Loader\\EventLoader' => __DIR__ . '/../..' . '/src/Events/Data/Loader/EventLoader.php',
        'WPGraphQL\\TEC\\Events\\Data\\OrganizerHelper' => __DIR__ . '/../..' . '/src/Events/Data/OrganizerHelper.php',
        'WPGraphQL\\TEC\\Events\\Data\\VenueHelper' => __DIR__ . '/../..' . '/src/Events/Data/VenueHelper.php',
        'WPGraphQL\\TEC\\Events\\Model\\Event' => __DIR__ . '/../..' . '/src/Events/Model/Event.php',
        'WPGraphQL\\TEC\\Events\\Model\\Organizer' => __DIR__ . '/../..' . '/src/Events/Model/Organizer.php',
        'WPGraphQL\\TEC\\Events\\Model\\Venue' => __DIR__ . '/../..' . '/src/Events/Model/Venue.php',
        'WPGraphQL\\TEC\\Events\\TypeRegistry' => __DIR__ . '/../..' . '/src/Events/TypeRegistry.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\CostOperatorEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/CostOperatorEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\CurrencyPositionEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/CurrencyPositionEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\EnabledViewsEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/EnabledViewsEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Enum\\EventsTemplateEnum' => __DIR__ . '/../..' . '/src/Events/Type/Enum/EventsTemplateEnum.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\CostFilterInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/CostFilterInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\DateAndTimezoneInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/DateAndTimezoneInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\Input\\DateRangeAndTimezoneInput' => __DIR__ . '/../..' . '/src/Events/Type/Input/DateRangeAndTimezoneInput.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithEvent' => __DIR__ . '/../..' . '/src/Events/Type/WPInterface/NodeWithEvent.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithOrganizers' => __DIR__ . '/../..' . '/src/Events/Type/WPInterface/NodeWithOrganizers.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithVenue' => __DIR__ . '/../..' . '/src/Events/Type/WPInterface/NodeWithVenue.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Event' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Event.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Organizer' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Organizer.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\OrganizerLinkedData' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/OrganizerLinkedData.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Venue' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/Venue.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueCoordinates' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/VenueCoordinates.php',
        'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueLinkedData' => __DIR__ . '/../..' . '/src/Events/Type/WPObject/VenueLinkedData.php',
        'WPGraphQL\\TEC\\Interfaces\\Hookable' => __DIR__ . '/../..' . '/src/Interfaces/Hookable.php',
        'WPGraphQL\\TEC\\Interfaces\\TypeRegistryInterface' => __DIR__ . '/../..' . '/src/Interfaces/TypeRegistryInterface.php',
        'WPGraphQL\\TEC\\TEC' => __DIR__ . '/../..' . '/src/TEC.php',
        'WPGraphQL\\TEC\\Tickets\\Connection\\Attendees' => __DIR__ . '/../..' . '/src/Tickets/Connection/Attendees.php',
        'WPGraphQL\\TEC\\Tickets\\Connection\\Orders' => __DIR__ . '/../..' . '/src/Tickets/Connection/Orders.php',
        'WPGraphQL\\TEC\\Tickets\\Connection\\Tickets' => __DIR__ . '/../..' . '/src/Tickets/Connection/Tickets.php',
        'WPGraphQL\\TEC\\Tickets\\CoreSchemaFilters' => __DIR__ . '/../..' . '/src/Tickets/CoreSchemaFilters.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\AttendeeHelper' => __DIR__ . '/../..' . '/src/Tickets/Data/AttendeeHelper.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\AttendeeConnectionResolver' => __DIR__ . '/../..' . '/src/Tickets/Data/Connection/AttendeeConnectionResolver.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\OrderConnectionResolver' => __DIR__ . '/../..' . '/src/Tickets/Data/Connection/OrderConnectionResolver.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\TicketConnectionResolver' => __DIR__ . '/../..' . '/src/Tickets/Data/Connection/TicketConnectionResolver.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Factory' => __DIR__ . '/../..' . '/src/Tickets/Data/Factory.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\AttendeeLoader' => __DIR__ . '/../..' . '/src/Tickets/Data/Loader/AttendeeLoader.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\OrderLoader' => __DIR__ . '/../..' . '/src/Tickets/Data/Loader/OrderLoader.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\TicketLoader' => __DIR__ . '/../..' . '/src/Tickets/Data/Loader/TicketLoader.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\OrderHelper' => __DIR__ . '/../..' . '/src/Tickets/Data/OrderHelper.php',
        'WPGraphQL\\TEC\\Tickets\\Data\\TicketHelper' => __DIR__ . '/../..' . '/src/Tickets/Data/TicketHelper.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\Attendee' => __DIR__ . '/../..' . '/src/Tickets/Model/Attendee.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\Order' => __DIR__ . '/../..' . '/src/Tickets/Model/Order.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\PurchasableTicket' => __DIR__ . '/../..' . '/src/Tickets/Model/PurchasableTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\RsvpTicket' => __DIR__ . '/../..' . '/src/Tickets/Model/RsvpTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Model\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Model/Ticket.php',
        'WPGraphQL\\TEC\\Tickets\\Mutation\\CreateRsvp' => __DIR__ . '/../..' . '/src/Tickets/Mutation/CreateRsvp.php',
        'WPGraphQL\\TEC\\Tickets\\Mutation\\UpdateRsvp' => __DIR__ . '/../..' . '/src/Tickets/Mutation/UpdateRsvp.php',
        'WPGraphQL\\TEC\\Tickets\\TypeRegistry' => __DIR__ . '/../..' . '/src/Tickets/TypeRegistry.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\AttendeeOptoutStatusEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/AttendeeOptoutStatusEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\AttendeeTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/AttendeeTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\CurrencyCodeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/CurrencyCodeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\OrderStatusEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/OrderStatusEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\OrderTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/OrderTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\PaymentGatewaysEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/PaymentGatewaysEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockHandlingOptionsEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/StockHandlingOptionsEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockModeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/StockModeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketFormLocationOptionsEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketFormLocationOptionsEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketIdTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketIdTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketTypeEnum' => __DIR__ . '/../..' . '/src/Tickets/Type/Enum/TicketTypeEnum.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Input\\AttendeeInput' => __DIR__ . '/../..' . '/src/Tickets/Type/Input/AttendeeInput.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\Input\\IntRangeInput' => __DIR__ . '/../..' . '/src/Tickets/Type/Input/IntRangeInput.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Attendee' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/Attendee.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithAttendees' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/NodeWithAttendees.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithOrder' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/NodeWithOrder.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithTicket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/NodeWithTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithTickets' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/NodeWithTickets.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithUser' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/NodeWithUser.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Order' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/Order.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\PurchasableTicket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/PurchasableTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Ticket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPInterface/Ticket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\OffersLinkedData' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/OffersLinkedData.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\OrderItem' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/OrderItem.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\RsvpTicket' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/RsvpTicket.php',
        'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\TecSettings' => __DIR__ . '/../..' . '/src/Tickets/Type/WPObject/TecSettings.php',
        'WPGraphQL\\TEC\\Traits\\PostTypeResolverMethod' => __DIR__ . '/../..' . '/src/Traits/PostTypeResolverMethod.php',
        'WPGraphQL\\TEC\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\TEC\\Utils\\Utils' => __DIR__ . '/../..' . '/src/Utils/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit70778bcb3841274af4cc70b093cb0596::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit70778bcb3841274af4cc70b093cb0596::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit70778bcb3841274af4cc70b093cb0596::$classMap;

        }, null, ClassLoader::class);
    }
}
