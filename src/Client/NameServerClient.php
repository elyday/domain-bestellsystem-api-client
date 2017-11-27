<?php
/**
 * @author Timo Förster <tfoerster@webfoersterei.de>
 * @date 23.11.17
 */

namespace Webfoersterei\DomainBestellSystemApiClient\Client;


use Webfoersterei\DomainBestellSystemApiClient\Client\NameServer\ZoneCreateRequest;
use Webfoersterei\DomainBestellSystemApiClient\Client\NameServer\ZoneCreateResponse;

class NameServerClient extends AbstractClient
{

    /**
     * @param ZoneCreateRequest $zoneCreateRequest
     * @return ZoneCreateResponse
     */
    public function zoneCreate(ZoneCreateRequest $zoneCreateRequest): ZoneCreateResponse
    {
        $arrayRequest = $this->convertRequestToArray($zoneCreateRequest);

        /** @var ZoneCreateResponse $createResponse */
        $createResponse = $this->doApiCall('nameserverZoneCreate', ZoneCreateResponse::class, $arrayRequest);

        return $createResponse;
    }

}