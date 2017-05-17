<?php
//  LS Data Model for Google Calendar.  PHP array.  Verson 1.1.
//  Copyright (C) 2016 Little Systems
//
//  This program is free software: you can redistribute it and/or modify
//  it under the terms of the GNU General Public License as published by
//  the Free Software Foundation, either version 3 of the License, or
//  (at your option) any later version.
//
//  This program is distributed in the hope that it will be useful,
//  but WITHOUT ANY WARRANTY; without even the implied warranty of
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//  GNU General Public License for more details.
//
//  You should have received a copy of the GNU General Public License
//  along with this program.  If not, see <http://www.gnu.org/licenses/>.
//

//                                     Type         Length    Primary Key   Foreign Key           Description
$structure = array (
                                       'type',      'length', 'primarykey', 'foreignkey',         'description'
);

$table = array(
  // https://developers.google.com/google-apps/calendar/v3/reference/calendarList
  // from under the Creative Commons Attribution 3.0 License and the Apache 2.0 License.
  'calendarList' => array(
    'kind'                    => array('Text',      256,      '',           '',                   'Type of the resource ("calendar#calendarListEntry").'),
    'etag'                    => array('Text',      256),
    'id'                      => array('Text',      256,      'Y'),
    'summary'                 => array('Text',      256),
    'description'             => array('Text',      256),
    'location'                => array('Text',      256),
    'timeZone'                => array('Text',      256),
    'summaryOverride'         => array('Text',      256),
    'colorId'                 => array('Text',      256),
    'backgroundColor'         => array('Text',      256),
    'foregroundColor'         => array('Text',      256),
    'hidden'                  => array('Boolean'),
    'selected'                => array('Boolean'),
    'accessRole'              => array('Text',      256),
    'defaultReminders'        => array('JSON'),
    'notificationSettings'    => array('JSON'),
    'primary'                 => array('Boolean'),
    'deleted'                 => array('Boolean'),
  ),

  // https://developers.google.com/google-apps/calendar/v3/reference/calendars
  // from under the Creative Commons Attribution 3.0 License and the Apache 2.0 License.
/*
  'calendars' => array(
    'kind'                    => array('Text',      256,      '',           ''                    'Type of the resource ("calendar#calendar").'),
    'etag'                    => array('Text',      256),
    'id'                      => array('Text',      256,      'Y'),
    'summary'                 => array('Text',      256),
    'description'             => array('Text',      256),
    'location'                => array('Text',      256),
    'timeZone'                => array('Text',      256),
  ),
*/

  // https://developers.google.com/google-apps/calendar/v3/reference/events
  // from under the Creative Commons Attribution 3.0 License and the Apache 2.0 License.
  'events' => array(
    'calendarId'              => array('Text',      256,      'Y',          'calendarList,id'),
    'kind'                    => array('Text',      256,      '',           '',                   'Type of the resource ("calendar#event").'),
    'etag'                    => array('Text',      256),
    'id'                      => array('Text',      256,      'Y',          '',                   'Opaque identifier of the event. When creating new single or recurring events, you can specify their IDs...'),
    'status'                  => array('Text',      256),
    'htmlLink'                => array('Text',      256),
    'created'                 => array('Datetime'),
    'updated'                 => array('Datetime'),
    'summary'                 => array('Text',      256),
    'description'             => array('Text'),
    'location'                => array('Text',      256),
    'colorId'                 => array('Text',      256),
    'creator'                 => array('JSON'),
    'organizer'               => array('JSON'),
    'start'                   => array('Datetime'),
    'end'                     => array('Datetime'),
    'endTimeUnspecified'      => array('Boolean'),
    'recurrence'              => array('JSON'),
    'recurringEventId'        => array('Text',      256),
    'originalStartTime'       => array('JSON'),
    'transparency'            => array('Text',      256),
    'visibility'              => array('Text',      256),
    'iCalUID'                 => array('Text',      256),
    'sequence'                => array('Integer'),
    'attendees'               => array('JSON'),
    'attendeesOmitted'        => array('Boolean'),
    'extendedProperties'      => array('JSON'),
    'hangoutLink'             => array('Text',      256),
    'gadget'                  => array('JSON'),
    'anyoneCanAddSelf'        => array('Boolean'),
    'guestsCanInviteOthers'   => array('Boolean'),
    'guestsCanModify'         => array('Boolean'),
    'guestsCanSeeOtherGuests' => array('Boolean'),
    'privateCopy'             => array('Boolean'),
    'locked'                  => array('Boolean'),
    'reminders'               => array('JSON'),
    'source'                  => array('JSON'),
    'attachments'             => array('JSON'),
  ),
);

?>
