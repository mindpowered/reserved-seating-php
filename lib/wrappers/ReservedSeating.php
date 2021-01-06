<?php
namespace mindpowered\reservedseating;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \reservedseating\ReservedSeating as ReservedSeating_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * An Library for Reserved Seating
 * Venues have Seats, Events are at Venues
 * Reservations are Seats at Events
 */
class ReservedSeating
{
	/**
	 * ReservedSeating
	 */
	function __construct() {
		$bus = MagLev::getInstance('default');
		$lib = new ReservedSeating_Library($bus);
	}

	/**
	 * Create a new venue
	 * @param string $ownerId Who is responsible for this venue
	 * @param string $name Name of Venue
	 * @param float $maxPeople Maximum people permitted in venue
	 * @return string the id of the new venue
	 */
	public function CreateVenue($ownerId, $name, $maxPeople)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ownerId, $name, $maxPeople];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateVenue', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Create a new Venue Congiguration
	 * @param string $venueId Venue
	 * @param string $name Name of Venue Configuration
	 * @param float $maxPeople Maximum number of people permitted in this Venue Configuration
	 * @return string the id of the new Venue Configuration
	 */
	public function CreateVenueConfiguration($venueId, $name, $maxPeople)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$venueId, $name, $maxPeople];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateVenueConfiguration', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Create a new seat
	 * @param string $name The seat name
	 * @param string $seatClass The class of seat
	 * @param string $venueConfigId the Venue Configuration the seat belongs to
	 * @param array $nextTo the seats that are next to this one
	 * @param string $tableId the table this seat is at
	 * @param object $geometry Information about where the Seat is
	 * @return string the id of the new seat
	 */
	public function CreateSeat($name, $seatClass, $venueConfigId, $nextTo, $tableId, $geometry)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$name, $seatClass, $venueConfigId, $nextTo, $tableId, $geometry];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateSeat', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Create a new Event
	 * @param string $ownerId Who is responsible for this event
	 * @param string $venueConfigId Venue Configuration to use for this event
	 * @param float $maxPeople Maximum people permitted in venue
	 * @return string the id of the new Event
	 */
	public function CreateEvent($ownerId, $venueConfigId, $maxPeople)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ownerId, $venueConfigId, $maxPeople];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateEvent', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Create a new Table
	 * @param string $venueConfigId Venue Configuration to use for this event
	 * @param float $minSeats Minimum number of people in a party to reserve the table
	 * @param float $maxSeats Maximum number of people that can sit at this table
	 * @param object $geometry Information about where the Table is
	 * @return string the id of the new Table
	 */
	public function CreateTable($venueConfigId, $minSeats, $maxSeats, $geometry)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$venueConfigId, $minSeats, $maxSeats, $geometry];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateTable', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Create a new Order
	 * @param string $userId The user who is placing the reservation
	 * @param string $eventId The event that the order is for
	 * @param float $expires Timestamp when order expires and is considered abondoned
	 * @return string the id of the new Order
	 */
	public function CreateOrder($userId, $eventId, $expires)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$userId, $eventId, $expires];
		$ret = null;
		$phpbus->call('ReservedSeating.CreateOrder', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a Venue
	 * @param string $id Venue ID
	 * @return object the Venue data as an object
	 */
	public function GetVenue($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$ret = null;
		$phpbus->call('ReservedSeating.GetVenue', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a Venue Configuration
	 * @param string $id Venue Configuration ID
	 * @return object the VenueConfiguration data as an object
	 */
	public function GetVenueConfiguration($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$ret = null;
		$phpbus->call('ReservedSeating.GetVenueConfiguration', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a Seat
	 * @param string $id Seat ID
	 * @return object the Seat data as an object
	 */
	public function GetSeat($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$ret = null;
		$phpbus->call('ReservedSeating.GetSeat', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get an Event
	 * @param string $id Event ID
	 * @return object the Event data as an object
	 */
	public function GetEvent($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$ret = null;
		$phpbus->call('ReservedSeating.GetEvent', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a Table
	 * @param string $id Table ID
	 * @return object the Table data as an object
	 */
	public function GetTable($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$ret = null;
		$phpbus->call('ReservedSeating.GetTable', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Update a Venue
	 * @param object $data Venue data to update
	 * @param bool $complete if set to true, missing fields should be deleted
	 * @return void
	 */
	public function UpdateVenue($data, $complete)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$data, $complete];
		$phpbus->call('ReservedSeating.UpdateVenue', $args, function($async_ret){});
	}

	/**
	 * Update a Venue Configuration
	 * @param object $data Venue Configuration data to update
	 * @param bool $complete if set to true, missing fields should be deleted
	 * @return void
	 */
	public function UpdateVenueConfiguration($data, $complete)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$data, $complete];
		$phpbus->call('ReservedSeating.UpdateVenueConfiguration', $args, function($async_ret){});
	}

	/**
	 * Update a Seat
	 * @param object $data Seat data to update
	 * @param bool $complete if set to true, missing fields should be deleted
	 * @return void
	 */
	public function UpdateSeat($data, $complete)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$data, $complete];
		$phpbus->call('ReservedSeating.UpdateSeat', $args, function($async_ret){});
	}

	/**
	 * Update an Event
	 * @param object $data Event data to update
	 * @param bool $complete if set to true, missing fields should be deleted
	 * @return void
	 */
	public function UpdateEvent($data, $complete)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$data, $complete];
		$phpbus->call('ReservedSeating.UpdateEvent', $args, function($async_ret){});
	}

	/**
	 * Update a Table
	 * @param object $data Table data to update
	 * @param bool $complete if set to true, missing fields should be deleted
	 * @return void
	 */
	public function UpdateTable($data, $complete)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$data, $complete];
		$phpbus->call('ReservedSeating.UpdateTable', $args, function($async_ret){});
	}

	/**
	 * Delete a Venue
	 * @param string $id Venue ID
	 * @return void
	 */
	public function DeleteVenue($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteVenue', $args, function($async_ret){});
	}

	/**
	 * Delete a Venue Configuration
	 * Must be unavailable first
	 * @param string $id Venue Configuration ID
	 * @return void
	 */
	public function DeleteVenueConfiguration($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteVenueConfiguration', $args, function($async_ret){});
	}

	/**
	 * Delete a Seat
	 * Venue Configuration must be unavailable first
	 * @param string $id Seat ID
	 * @return void
	 */
	public function DeleteSeat($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteSeat', $args, function($async_ret){});
	}

	/**
	 * Delete an Event
	 * Events on sale must be cancelled before being deleted.
	 * @param string $id Event ID
	 * @return void
	 */
	public function DeleteEvent($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteEvent', $args, function($async_ret){});
	}

	/**
	 * Delete a Table
	 * Venue Configuration must be unavailable first
	 * @param string $id Table ID
	 * @return void
	 */
	public function DeleteTable($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteTable', $args, function($async_ret){});
	}

	/**
	 * Delete an Order
	 * Reservations must be cancelled first
	 * @param string $id Order ID
	 * @return void
	 */
	public function DeleteOrder($id)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$id];
		$phpbus->call('ReservedSeating.DeleteOrder', $args, function($async_ret){});
	}

	/**
	 * Complete order and convert holds into reservations
	 * @param string $orderId Order ID
	 * @return void
	 */
	public function CompleteOrder($orderId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$orderId];
		$phpbus->call('ReservedSeating.CompleteOrder', $args, function($async_ret){});
	}

	/**
	 * Place a hold on a seat and add it to an order
	 * @param string $orderId Order ID
	 * @param string $seatId Seat ID
	 * @return void
	 */
	public function AddSeatToOrder($orderId, $seatId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$orderId, $seatId];
		$phpbus->call('ReservedSeating.AddSeatToOrder', $args, function($async_ret){});
	}

	/**
	 * Keep an order from expiring and becoming abondoned
	 * @param string $orderId Order ID
	 * @param float $expires New timestamp when order will expire
	 * @return void
	 */
	public function ContinueOrder($orderId, $expires)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$orderId, $expires];
		$phpbus->call('ReservedSeating.ContinueOrder', $args, function($async_ret){});
	}

	/**
	 * Automatically select some seats and add them to the order
	 * @param float $numSeats Number of seats to select
	 * @param array $seatClassPreference Which seat classes to prefer in order
	 * @return void
	 */
	public function AutoSelect($numSeats, $seatClassPreference)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$numSeats, $seatClassPreference];
		$phpbus->call('ReservedSeating.AutoSelect', $args, function($async_ret){});
	}

	/**
	 * Cancel an event and all reservations for that event
	 * @param string $eventId Event ID
	 * @return void
	 */
	public function CancelEvent($eventId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$eventId];
		$phpbus->call('ReservedSeating.CancelEvent', $args, function($async_ret){});
	}

	/**
	 * Cancel a reservation and release the seats
	 * @param string $orderId Order ID
	 * @param string $seatId Seat ID
	 * @return void
	 */
	public function CancelReservation($orderId, $seatId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$orderId, $seatId];
		$phpbus->call('ReservedSeating.CancelReservation', $args, function($async_ret){});
	}

	/**
	 * Get all Seats and Tables for an Event
	 * @param string $eventId Event ID
	 * @param float $page page number
	 * @param float $perpage per page
	 * @return void
	 */
	public function GetSeatsAndTablesForEvent($eventId, $page, $perpage)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$eventId, $page, $perpage];
		$phpbus->call('ReservedSeating.GetSeatsAndTablesForEvent', $args, function($async_ret){});
	}

	/**
	 * Get any abondoned (expired) orders
	 * @param float $page page number
	 * @param float $perpage per page
	 * @return array abondoned orders
	 */
	public function FindAbandonedOrders($page, $perpage)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$page, $perpage];
		$ret = null;
		$phpbus->call('ReservedSeating.FindAbandonedOrders', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a users orders
	 * @param string $userId User ID
	 * @param float $page page number
	 * @param float $perpage per page
	 * @return array orders for user
	 */
	public function GetOrdersForUser($userId, $page, $perpage)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$userId, $page, $perpage];
		$ret = null;
		$phpbus->call('ReservedSeating.GetOrdersForUser', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get all Events marked on sale
	 * @param float $page page number
	 * @param float $perpage per page
	 * @return array events on sale
	 */
	public function GetAllEventsOnSale($page, $perpage)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$page, $perpage];
		$ret = null;
		$phpbus->call('ReservedSeating.GetAllEventsOnSale', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Make a venue configuration available or unavailable.
	 * Must not have any events for sale using this venute configuration.
	 * @param string $venueConfigurationId Venue Configuration ID
	 * @param bool $available availability
	 * @return void
	 */
	public function UpdateVenueConfigurationAvailability($venueConfigurationId, $available)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$venueConfigurationId, $available];
		$phpbus->call('ReservedSeating.UpdateVenueConfigurationAvailability', $args, function($async_ret){});
	}

	/**
	 * Get Venue Configurations for a Venue
	 * @param string $venueId Venue ID
	 * @return array the Venue Configurations for the specified Venue
	 */
	public function GetVenueConfigurations($venueId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$venueId];
		$ret = null;
		$phpbus->call('ReservedSeating.GetVenueConfigurations', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get a summary of an Order
	 * @param string $orderId Order ID
	 * @return array the summary for the specified Order
	 */
	public function GetOrderSummary($orderId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$orderId];
		$ret = null;
		$phpbus->call('ReservedSeating.GetOrderSummary', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Get all Venues for an owner
	 * @param string $ownerId owner id
	 * @return array List of venues
	 */
	public function GetAllVenuesByOwner($ownerId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$ownerId];
		$ret = null;
		$phpbus->call('ReservedSeating.GetAllVenuesByOwner', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

}
