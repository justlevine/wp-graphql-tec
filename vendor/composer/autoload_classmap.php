<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'WPGraphQL\\TEC\\Abstracts\\DataHelper' => $baseDir . '/src/Abstracts/DataHelper.php',
    'WPGraphQL\\TEC\\Common\\TypeRegistry' => $baseDir . '/src/Common/TypeRegistry.php',
    'WPGraphQL\\TEC\\Common\\Type\\Enum\\TimezoneModeEnum' => $baseDir . '/src/Common/Type/Enum/TimezoneModeEnum.php',
    'WPGraphQL\\TEC\\Common\\Type\\WPInterface\\NodeWithJsonLd' => $baseDir . '/src/Common/Type/WPInterface/NodeWithJsonLd.php',
    'WPGraphQL\\TEC\\Common\\Type\\WPObject\\EventLinkedData' => $baseDir . '/src/Common/Type/WPObject/EventLinkedData.php',
    'WPGraphQL\\TEC\\Common\\Type\\WPObject\\TecSettings' => $baseDir . '/src/Common/Type/WPObject/TecSettings.php',
    'WPGraphQL\\TEC\\Events\\Connection\\Events' => $baseDir . '/src/Events/Connection/Events.php',
    'WPGraphQL\\TEC\\Events\\CoreSchemaFilters' => $baseDir . '/src/Events/CoreSchemaFilters.php',
    'WPGraphQL\\TEC\\Events\\Data\\Connection\\EventConnectionResolver' => $baseDir . '/src/Events/Data/Connection/EventConnectionResolver.php',
    'WPGraphQL\\TEC\\Events\\Data\\Connection\\OrganizerConnectionResolver' => $baseDir . '/src/Events/Data/Connection/OrganizerConnectionResolver.php',
    'WPGraphQL\\TEC\\Events\\Data\\Connection\\VenueConnectionResolver' => $baseDir . '/src/Events/Data/Connection/VenueConnectionResolver.php',
    'WPGraphQL\\TEC\\Events\\Data\\EventHelper' => $baseDir . '/src/Events/Data/EventHelper.php',
    'WPGraphQL\\TEC\\Events\\Data\\Factory' => $baseDir . '/src/Events/Data/Factory.php',
    'WPGraphQL\\TEC\\Events\\Data\\Loader\\EventLoader' => $baseDir . '/src/Events/Data/Loader/EventLoader.php',
    'WPGraphQL\\TEC\\Events\\Data\\OrganizerHelper' => $baseDir . '/src/Events/Data/OrganizerHelper.php',
    'WPGraphQL\\TEC\\Events\\Data\\VenueHelper' => $baseDir . '/src/Events/Data/VenueHelper.php',
    'WPGraphQL\\TEC\\Events\\Model\\Event' => $baseDir . '/src/Events/Model/Event.php',
    'WPGraphQL\\TEC\\Events\\Model\\Organizer' => $baseDir . '/src/Events/Model/Organizer.php',
    'WPGraphQL\\TEC\\Events\\Model\\Venue' => $baseDir . '/src/Events/Model/Venue.php',
    'WPGraphQL\\TEC\\Events\\TypeRegistry' => $baseDir . '/src/Events/TypeRegistry.php',
    'WPGraphQL\\TEC\\Events\\Type\\Enum\\CostOperatorEnum' => $baseDir . '/src/Events/Type/Enum/CostOperatorEnum.php',
    'WPGraphQL\\TEC\\Events\\Type\\Enum\\CurrencyPositionEnum' => $baseDir . '/src/Events/Type/Enum/CurrencyPositionEnum.php',
    'WPGraphQL\\TEC\\Events\\Type\\Enum\\EnabledViewsEnum' => $baseDir . '/src/Events/Type/Enum/EnabledViewsEnum.php',
    'WPGraphQL\\TEC\\Events\\Type\\Enum\\EventsTemplateEnum' => $baseDir . '/src/Events/Type/Enum/EventsTemplateEnum.php',
    'WPGraphQL\\TEC\\Events\\Type\\Input\\CostFilterInput' => $baseDir . '/src/Events/Type/Input/CostFilterInput.php',
    'WPGraphQL\\TEC\\Events\\Type\\Input\\DateAndTimezoneInput' => $baseDir . '/src/Events/Type/Input/DateAndTimezoneInput.php',
    'WPGraphQL\\TEC\\Events\\Type\\Input\\DateRangeAndTimezoneInput' => $baseDir . '/src/Events/Type/Input/DateRangeAndTimezoneInput.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithEvent' => $baseDir . '/src/Events/Type/WPInterface/NodeWithEvent.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithOrganizers' => $baseDir . '/src/Events/Type/WPInterface/NodeWithOrganizers.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPInterface\\NodeWithVenue' => $baseDir . '/src/Events/Type/WPInterface/NodeWithVenue.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Event' => $baseDir . '/src/Events/Type/WPObject/Event.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Organizer' => $baseDir . '/src/Events/Type/WPObject/Organizer.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\OrganizerLinkedData' => $baseDir . '/src/Events/Type/WPObject/OrganizerLinkedData.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\TecSettings' => $baseDir . '/src/Events/Type/WPObject/TecSettings.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\Venue' => $baseDir . '/src/Events/Type/WPObject/Venue.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueCoordinates' => $baseDir . '/src/Events/Type/WPObject/VenueCoordinates.php',
    'WPGraphQL\\TEC\\Events\\Type\\WPObject\\VenueLinkedData' => $baseDir . '/src/Events/Type/WPObject/VenueLinkedData.php',
    'WPGraphQL\\TEC\\Interfaces\\Hookable' => $baseDir . '/src/Interfaces/Hookable.php',
    'WPGraphQL\\TEC\\Interfaces\\TypeRegistryInterface' => $baseDir . '/src/Interfaces/TypeRegistryInterface.php',
    'WPGraphQL\\TEC\\TEC' => $baseDir . '/src/TEC.php',
    'WPGraphQL\\TEC\\Tickets\\Connection\\Attendees' => $baseDir . '/src/Tickets/Connection/Attendees.php',
    'WPGraphQL\\TEC\\Tickets\\Connection\\Orders' => $baseDir . '/src/Tickets/Connection/Orders.php',
    'WPGraphQL\\TEC\\Tickets\\Connection\\Tickets' => $baseDir . '/src/Tickets/Connection/Tickets.php',
    'WPGraphQL\\TEC\\Tickets\\CoreSchemaFilters' => $baseDir . '/src/Tickets/CoreSchemaFilters.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\AttendeeHelper' => $baseDir . '/src/Tickets/Data/AttendeeHelper.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\AttendeeConnectionResolver' => $baseDir . '/src/Tickets/Data/Connection/AttendeeConnectionResolver.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\OrderConnectionResolver' => $baseDir . '/src/Tickets/Data/Connection/OrderConnectionResolver.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Connection\\TicketConnectionResolver' => $baseDir . '/src/Tickets/Data/Connection/TicketConnectionResolver.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Factory' => $baseDir . '/src/Tickets/Data/Factory.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\AttendeeLoader' => $baseDir . '/src/Tickets/Data/Loader/AttendeeLoader.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\OrderLoader' => $baseDir . '/src/Tickets/Data/Loader/OrderLoader.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\Loader\\TicketLoader' => $baseDir . '/src/Tickets/Data/Loader/TicketLoader.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\OrderHelper' => $baseDir . '/src/Tickets/Data/OrderHelper.php',
    'WPGraphQL\\TEC\\Tickets\\Data\\TicketHelper' => $baseDir . '/src/Tickets/Data/TicketHelper.php',
    'WPGraphQL\\TEC\\Tickets\\Model\\Attendee' => $baseDir . '/src/Tickets/Model/Attendee.php',
    'WPGraphQL\\TEC\\Tickets\\Model\\Order' => $baseDir . '/src/Tickets/Model/Order.php',
    'WPGraphQL\\TEC\\Tickets\\Model\\PurchasableTicket' => $baseDir . '/src/Tickets/Model/PurchasableTicket.php',
    'WPGraphQL\\TEC\\Tickets\\Model\\RsvpTicket' => $baseDir . '/src/Tickets/Model/RsvpTicket.php',
    'WPGraphQL\\TEC\\Tickets\\Model\\Ticket' => $baseDir . '/src/Tickets/Model/Ticket.php',
    'WPGraphQL\\TEC\\Tickets\\Mutation\\CreateRsvp' => $baseDir . '/src/Tickets/Mutation/CreateRsvp.php',
    'WPGraphQL\\TEC\\Tickets\\Mutation\\UpdateRsvp' => $baseDir . '/src/Tickets/Mutation/UpdateRsvp.php',
    'WPGraphQL\\TEC\\Tickets\\TypeRegistry' => $baseDir . '/src/Tickets/TypeRegistry.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\AttendeeOptoutStatusEnum' => $baseDir . '/src/Tickets/Type/Enum/AttendeeOptoutStatusEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\AttendeeTypeEnum' => $baseDir . '/src/Tickets/Type/Enum/AttendeeTypeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\CurrencyCodeEnum' => $baseDir . '/src/Tickets/Type/Enum/CurrencyCodeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\OrderStatusEnum' => $baseDir . '/src/Tickets/Type/Enum/OrderStatusEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\OrderTypeEnum' => $baseDir . '/src/Tickets/Type/Enum/OrderTypeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\PaymentGatewaysEnum' => $baseDir . '/src/Tickets/Type/Enum/PaymentGatewaysEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockHandlingOptionsEnum' => $baseDir . '/src/Tickets/Type/Enum/StockHandlingOptionsEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\StockModeEnum' => $baseDir . '/src/Tickets/Type/Enum/StockModeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketFormLocationOptionsEnum' => $baseDir . '/src/Tickets/Type/Enum/TicketFormLocationOptionsEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketIdTypeEnum' => $baseDir . '/src/Tickets/Type/Enum/TicketIdTypeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Enum\\TicketTypeEnum' => $baseDir . '/src/Tickets/Type/Enum/TicketTypeEnum.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Input\\AttendeeInput' => $baseDir . '/src/Tickets/Type/Input/AttendeeInput.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\Input\\IntRangeInput' => $baseDir . '/src/Tickets/Type/Input/IntRangeInput.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Attendee' => $baseDir . '/src/Tickets/Type/WPInterface/Attendee.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithAttendees' => $baseDir . '/src/Tickets/Type/WPInterface/NodeWithAttendees.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithOrder' => $baseDir . '/src/Tickets/Type/WPInterface/NodeWithOrder.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithTicket' => $baseDir . '/src/Tickets/Type/WPInterface/NodeWithTicket.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithTickets' => $baseDir . '/src/Tickets/Type/WPInterface/NodeWithTickets.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\NodeWithUser' => $baseDir . '/src/Tickets/Type/WPInterface/NodeWithUser.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Order' => $baseDir . '/src/Tickets/Type/WPInterface/Order.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\PurchasableTicket' => $baseDir . '/src/Tickets/Type/WPInterface/PurchasableTicket.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPInterface\\Ticket' => $baseDir . '/src/Tickets/Type/WPInterface/Ticket.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\OffersLinkedData' => $baseDir . '/src/Tickets/Type/WPObject/OffersLinkedData.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\OrderItem' => $baseDir . '/src/Tickets/Type/WPObject/OrderItem.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\RsvpTicket' => $baseDir . '/src/Tickets/Type/WPObject/RsvpTicket.php',
    'WPGraphQL\\TEC\\Tickets\\Type\\WPObject\\TecSettings' => $baseDir . '/src/Tickets/Type/WPObject/TecSettings.php',
    'WPGraphQL\\TEC\\Traits\\PostTypeResolverMethod' => $baseDir . '/src/Traits/PostTypeResolverMethod.php',
    'WPGraphQL\\TEC\\TypeRegistry' => $baseDir . '/src/TypeRegistry.php',
    'WPGraphQL\\TEC\\Utils\\Utils' => $baseDir . '/src/Utils/Utils.php',
);
