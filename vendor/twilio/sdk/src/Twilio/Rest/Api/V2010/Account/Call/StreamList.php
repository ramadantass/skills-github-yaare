<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Call;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

class StreamList extends ListResource {
    /**
     * Construct the StreamList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created this resource
     * @param string $callSid The SID of the Call the resource is associated with
     */
    public function __construct(Version $version, string $accountSid, string $callSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, ];

        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Streams.json';
    }

    /**
     * Create the StreamInstance
     *
     * @param string $url Url where WebSocket connection will be established.
     * @param array|Options $options Optional Arguments
     * @return StreamInstance Created StreamInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $url, array $options = []): StreamInstance {
        $options = new Values($options);

        $data = Values::of([
            'Url' => $url,
            'Name' => $options['name'],
            'Track' => $options['track'],
            'StatusCallback' => $options['statusCallback'],
            'StatusCallbackMethod' => $options['statusCallbackMethod'],
            'Parameter1.Name' => $options['parameter1Name'],
            'Parameter1.Value' => $options['parameter1Value'],
            'Parameter2.Name' => $options['parameter2Name'],
            'Parameter2.Value' => $options['parameter2Value'],
            'Parameter3.Name' => $options['parameter3Name'],
            'Parameter3.Value' => $options['parameter3Value'],
            'Parameter4.Name' => $options['parameter4Name'],
            'Parameter4.Value' => $options['parameter4Value'],
            'Parameter5.Name' => $options['parameter5Name'],
            'Parameter5.Value' => $options['parameter5Value'],
            'Parameter6.Name' => $options['parameter6Name'],
            'Parameter6.Value' => $options['parameter6Value'],
            'Parameter7.Name' => $options['parameter7Name'],
            'Parameter7.Value' => $options['parameter7Value'],
            'Parameter8.Name' => $options['parameter8Name'],
            'Parameter8.Value' => $options['parameter8Value'],
            'Parameter9.Name' => $options['parameter9Name'],
            'Parameter9.Value' => $options['parameter9Value'],
            'Parameter10.Name' => $options['parameter10Name'],
            'Parameter10.Value' => $options['parameter10Value'],
            'Parameter11.Name' => $options['parameter11Name'],
            'Parameter11.Value' => $options['parameter11Value'],
            'Parameter12.Name' => $options['parameter12Name'],
            'Parameter12.Value' => $options['parameter12Value'],
            'Parameter13.Name' => $options['parameter13Name'],
            'Parameter13.Value' => $options['parameter13Value'],
            'Parameter14.Name' => $options['parameter14Name'],
            'Parameter14.Value' => $options['parameter14Value'],
            'Parameter15.Name' => $options['parameter15Name'],
            'Parameter15.Value' => $options['parameter15Value'],
            'Parameter16.Name' => $options['parameter16Name'],
            'Parameter16.Value' => $options['parameter16Value'],
            'Parameter17.Name' => $options['parameter17Name'],
            'Parameter17.Value' => $options['parameter17Value'],
            'Parameter18.Name' => $options['parameter18Name'],
            'Parameter18.Value' => $options['parameter18Value'],
            'Parameter19.Name' => $options['parameter19Name'],
            'Parameter19.Value' => $options['parameter19Value'],
            'Parameter20.Name' => $options['parameter20Name'],
            'Parameter20.Value' => $options['parameter20Value'],
            'Parameter21.Name' => $options['parameter21Name'],
            'Parameter21.Value' => $options['parameter21Value'],
            'Parameter22.Name' => $options['parameter22Name'],
            'Parameter22.Value' => $options['parameter22Value'],
            'Parameter23.Name' => $options['parameter23Name'],
            'Parameter23.Value' => $options['parameter23Value'],
            'Parameter24.Name' => $options['parameter24Name'],
            'Parameter24.Value' => $options['parameter24Value'],
            'Parameter25.Name' => $options['parameter25Name'],
            'Parameter25.Value' => $options['parameter25Value'],
            'Parameter26.Name' => $options['parameter26Name'],
            'Parameter26.Value' => $options['parameter26Value'],
            'Parameter27.Name' => $options['parameter27Name'],
            'Parameter27.Value' => $options['parameter27Value'],
            'Parameter28.Name' => $options['parameter28Name'],
            'Parameter28.Value' => $options['parameter28Value'],
            'Parameter29.Name' => $options['parameter29Name'],
            'Parameter29.Value' => $options['parameter29Value'],
            'Parameter30.Name' => $options['parameter30Name'],
            'Parameter30.Value' => $options['parameter30Value'],
            'Parameter31.Name' => $options['parameter31Name'],
            'Parameter31.Value' => $options['parameter31Value'],
            'Parameter32.Name' => $options['parameter32Name'],
            'Parameter32.Value' => $options['parameter32Value'],
            'Parameter33.Name' => $options['parameter33Name'],
            'Parameter33.Value' => $options['parameter33Value'],
            'Parameter34.Name' => $options['parameter34Name'],
            'Parameter34.Value' => $options['parameter34Value'],
            'Parameter35.Name' => $options['parameter35Name'],
            'Parameter35.Value' => $options['parameter35Value'],
            'Parameter36.Name' => $options['parameter36Name'],
            'Parameter36.Value' => $options['parameter36Value'],
            'Parameter37.Name' => $options['parameter37Name'],
            'Parameter37.Value' => $options['parameter37Value'],
            'Parameter38.Name' => $options['parameter38Name'],
            'Parameter38.Value' => $options['parameter38Value'],
            'Parameter39.Name' => $options['parameter39Name'],
            'Parameter39.Value' => $options['parameter39Value'],
            'Parameter40.Name' => $options['parameter40Name'],
            'Parameter40.Value' => $options['parameter40Value'],
            'Parameter41.Name' => $options['parameter41Name'],
            'Parameter41.Value' => $options['parameter41Value'],
            'Parameter42.Name' => $options['parameter42Name'],
            'Parameter42.Value' => $options['parameter42Value'],
            'Parameter43.Name' => $options['parameter43Name'],
            'Parameter43.Value' => $options['parameter43Value'],
            'Parameter44.Name' => $options['parameter44Name'],
            'Parameter44.Value' => $options['parameter44Value'],
            'Parameter45.Name' => $options['parameter45Name'],
            'Parameter45.Value' => $options['parameter45Value'],
            'Parameter46.Name' => $options['parameter46Name'],
            'Parameter46.Value' => $options['parameter46Value'],
            'Parameter47.Name' => $options['parameter47Name'],
            'Parameter47.Value' => $options['parameter47Value'],
            'Parameter48.Name' => $options['parameter48Name'],
            'Parameter48.Value' => $options['parameter48Value'],
            'Parameter49.Name' => $options['parameter49Name'],
            'Parameter49.Value' => $options['parameter49Value'],
            'Parameter50.Name' => $options['parameter50Name'],
            'Parameter50.Value' => $options['parameter50Value'],
            'Parameter51.Name' => $options['parameter51Name'],
            'Parameter51.Value' => $options['parameter51Value'],
            'Parameter52.Name' => $options['parameter52Name'],
            'Parameter52.Value' => $options['parameter52Value'],
            'Parameter53.Name' => $options['parameter53Name'],
            'Parameter53.Value' => $options['parameter53Value'],
            'Parameter54.Name' => $options['parameter54Name'],
            'Parameter54.Value' => $options['parameter54Value'],
            'Parameter55.Name' => $options['parameter55Name'],
            'Parameter55.Value' => $options['parameter55Value'],
            'Parameter56.Name' => $options['parameter56Name'],
            'Parameter56.Value' => $options['parameter56Value'],
            'Parameter57.Name' => $options['parameter57Name'],
            'Parameter57.Value' => $options['parameter57Value'],
            'Parameter58.Name' => $options['parameter58Name'],
            'Parameter58.Value' => $options['parameter58Value'],
            'Parameter59.Name' => $options['parameter59Name'],
            'Parameter59.Value' => $options['parameter59Value'],
            'Parameter60.Name' => $options['parameter60Name'],
            'Parameter60.Value' => $options['parameter60Value'],
            'Parameter61.Name' => $options['parameter61Name'],
            'Parameter61.Value' => $options['parameter61Value'],
            'Parameter62.Name' => $options['parameter62Name'],
            'Parameter62.Value' => $options['parameter62Value'],
            'Parameter63.Name' => $options['parameter63Name'],
            'Parameter63.Value' => $options['parameter63Value'],
            'Parameter64.Name' => $options['parameter64Name'],
            'Parameter64.Value' => $options['parameter64Value'],
            'Parameter65.Name' => $options['parameter65Name'],
            'Parameter65.Value' => $options['parameter65Value'],
            'Parameter66.Name' => $options['parameter66Name'],
            'Parameter66.Value' => $options['parameter66Value'],
            'Parameter67.Name' => $options['parameter67Name'],
            'Parameter67.Value' => $options['parameter67Value'],
            'Parameter68.Name' => $options['parameter68Name'],
            'Parameter68.Value' => $options['parameter68Value'],
            'Parameter69.Name' => $options['parameter69Name'],
            'Parameter69.Value' => $options['parameter69Value'],
            'Parameter70.Name' => $options['parameter70Name'],
            'Parameter70.Value' => $options['parameter70Value'],
            'Parameter71.Name' => $options['parameter71Name'],
            'Parameter71.Value' => $options['parameter71Value'],
            'Parameter72.Name' => $options['parameter72Name'],
            'Parameter72.Value' => $options['parameter72Value'],
            'Parameter73.Name' => $options['parameter73Name'],
            'Parameter73.Value' => $options['parameter73Value'],
            'Parameter74.Name' => $options['parameter74Name'],
            'Parameter74.Value' => $options['parameter74Value'],
            'Parameter75.Name' => $options['parameter75Name'],
            'Parameter75.Value' => $options['parameter75Value'],
            'Parameter76.Name' => $options['parameter76Name'],
            'Parameter76.Value' => $options['parameter76Value'],
            'Parameter77.Name' => $options['parameter77Name'],
            'Parameter77.Value' => $options['parameter77Value'],
            'Parameter78.Name' => $options['parameter78Name'],
            'Parameter78.Value' => $options['parameter78Value'],
            'Parameter79.Name' => $options['parameter79Name'],
            'Parameter79.Value' => $options['parameter79Value'],
            'Parameter80.Name' => $options['parameter80Name'],
            'Parameter80.Value' => $options['parameter80Value'],
            'Parameter81.Name' => $options['parameter81Name'],
            'Parameter81.Value' => $options['parameter81Value'],
            'Parameter82.Name' => $options['parameter82Name'],
            'Parameter82.Value' => $options['parameter82Value'],
            'Parameter83.Name' => $options['parameter83Name'],
            'Parameter83.Value' => $options['parameter83Value'],
            'Parameter84.Name' => $options['parameter84Name'],
            'Parameter84.Value' => $options['parameter84Value'],
            'Parameter85.Name' => $options['parameter85Name'],
            'Parameter85.Value' => $options['parameter85Value'],
            'Parameter86.Name' => $options['parameter86Name'],
            'Parameter86.Value' => $options['parameter86Value'],
            'Parameter87.Name' => $options['parameter87Name'],
            'Parameter87.Value' => $options['parameter87Value'],
            'Parameter88.Name' => $options['parameter88Name'],
            'Parameter88.Value' => $options['parameter88Value'],
            'Parameter89.Name' => $options['parameter89Name'],
            'Parameter89.Value' => $options['parameter89Value'],
            'Parameter90.Name' => $options['parameter90Name'],
            'Parameter90.Value' => $options['parameter90Value'],
            'Parameter91.Name' => $options['parameter91Name'],
            'Parameter91.Value' => $options['parameter91Value'],
            'Parameter92.Name' => $options['parameter92Name'],
            'Parameter92.Value' => $options['parameter92Value'],
            'Parameter93.Name' => $options['parameter93Name'],
            'Parameter93.Value' => $options['parameter93Value'],
            'Parameter94.Name' => $options['parameter94Name'],
            'Parameter94.Value' => $options['parameter94Value'],
            'Parameter95.Name' => $options['parameter95Name'],
            'Parameter95.Value' => $options['parameter95Value'],
            'Parameter96.Name' => $options['parameter96Name'],
            'Parameter96.Value' => $options['parameter96Value'],
            'Parameter97.Name' => $options['parameter97Name'],
            'Parameter97.Value' => $options['parameter97Value'],
            'Parameter98.Name' => $options['parameter98Name'],
            'Parameter98.Value' => $options['parameter98Value'],
            'Parameter99.Name' => $options['parameter99Name'],
            'Parameter99.Value' => $options['parameter99Value'],
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new StreamInstance(
            $this->version,
            $payload,
            $this->solution['accountSid'],
            $this->solution['callSid']
        );
    }

    /**
     * Constructs a StreamContext
     *
     * @param string $sid The SID of the Stream resource, or the `name`
     */
    public function getContext(string $sid): StreamContext {
        return new StreamContext(
            $this->version,
            $this->solution['accountSid'],
            $this->solution['callSid'],
            $sid
        );
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Api.V2010.StreamList]';
    }
}