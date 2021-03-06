<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Ecs\Request\V20140526;

use Aliyun\Core\RpcAcsRequest;

class AddTagsRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct("Ecs", "2014-05-26", "AddTags");
    }

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $resourceType;

    private $resourceId;

    private $tag1Key;

    private $tag2Key;

    private $tag3Key;

    private $tag4Key;

    private $tag5Key;

    private $tag1Value;

    private $tag2Value;

    private $tag3Value;

    private $tag4Value;

    private $tag5Value;

    public function getOwnerId()
    {
        return $this->ownerId;
    }

    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        $this->queryParameters["OwnerId"] = $ownerId;
    }

    public function getResourceOwnerAccount()
    {
        return $this->resourceOwnerAccount;
    }

    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->resourceOwnerAccount = $resourceOwnerAccount;
        $this->queryParameters["ResourceOwnerAccount"] = $resourceOwnerAccount;
    }

    public function getResourceOwnerId()
    {
        return $this->resourceOwnerId;
    }

    public function setResourceOwnerId($resourceOwnerId)
    {
        $this->resourceOwnerId = $resourceOwnerId;
        $this->queryParameters["ResourceOwnerId"] = $resourceOwnerId;
    }

    public function getResourceType()
    {
        return $this->resourceType;
    }

    public function setResourceType($resourceType)
    {
        $this->resourceType = $resourceType;
        $this->queryParameters["ResourceType"] = $resourceType;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
        $this->queryParameters["ResourceId"] = $resourceId;
    }

    public function getTag1Key()
    {
        return $this->tag1Key;
    }

    public function setTag1Key($tag1Key)
    {
        $this->tag1Key = $tag1Key;
        $this->queryParameters["Tag1Key"] = $tag1Key;
    }

    public function getTag2Key()
    {
        return $this->tag2Key;
    }

    public function setTag2Key($tag2Key)
    {
        $this->tag2Key = $tag2Key;
        $this->queryParameters["Tag2Key"] = $tag2Key;
    }

    public function getTag3Key()
    {
        return $this->tag3Key;
    }

    public function setTag3Key($tag3Key)
    {
        $this->tag3Key = $tag3Key;
        $this->queryParameters["Tag3Key"] = $tag3Key;
    }

    public function getTag4Key()
    {
        return $this->tag4Key;
    }

    public function setTag4Key($tag4Key)
    {
        $this->tag4Key = $tag4Key;
        $this->queryParameters["Tag4Key"] = $tag4Key;
    }

    public function getTag5Key()
    {
        return $this->tag5Key;
    }

    public function setTag5Key($tag5Key)
    {
        $this->tag5Key = $tag5Key;
        $this->queryParameters["Tag5Key"] = $tag5Key;
    }

    public function getTag1Value()
    {
        return $this->tag1Value;
    }

    public function setTag1Value($tag1Value)
    {
        $this->tag1Value = $tag1Value;
        $this->queryParameters["Tag1Value"] = $tag1Value;
    }

    public function getTag2Value()
    {
        return $this->tag2Value;
    }

    public function setTag2Value($tag2Value)
    {
        $this->tag2Value = $tag2Value;
        $this->queryParameters["Tag2Value"] = $tag2Value;
    }

    public function getTag3Value()
    {
        return $this->tag3Value;
    }

    public function setTag3Value($tag3Value)
    {
        $this->tag3Value = $tag3Value;
        $this->queryParameters["Tag3Value"] = $tag3Value;
    }

    public function getTag4Value()
    {
        return $this->tag4Value;
    }

    public function setTag4Value($tag4Value)
    {
        $this->tag4Value = $tag4Value;
        $this->queryParameters["Tag4Value"] = $tag4Value;
    }

    public function getTag5Value()
    {
        return $this->tag5Value;
    }

    public function setTag5Value($tag5Value)
    {
        $this->tag5Value = $tag5Value;
        $this->queryParameters["Tag5Value"] = $tag5Value;
    }
}
