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
namespace Aliyun\Rds\Request\V20140815;

use Aliyun\Core\RpcAcsRequest;

class DescribeDatabasesRequest extends RpcAcsRequest
{
    public function __construct()
    {
        parent::__construct("Rds", "2014-08-15", "DescribeDatabases");
    }

    private $ownerId;

    private $resourceOwnerAccount;

    private $resourceOwnerId;

    private $dBInstanceId;

    private $dBName;

    private $dBStatus;

    private $ownerAccount;

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

    public function getDBInstanceId()
    {
        return $this->dBInstanceId;
    }

    public function setDBInstanceId($dBInstanceId)
    {
        $this->dBInstanceId = $dBInstanceId;
        $this->queryParameters["DBInstanceId"] = $dBInstanceId;
    }

    public function getDBName()
    {
        return $this->dBName;
    }

    public function setDBName($dBName)
    {
        $this->dBName = $dBName;
        $this->queryParameters["DBName"] = $dBName;
    }

    public function getDBStatus()
    {
        return $this->dBStatus;
    }

    public function setDBStatus($dBStatus)
    {
        $this->dBStatus = $dBStatus;
        $this->queryParameters["DBStatus"] = $dBStatus;
    }

    public function getOwnerAccount()
    {
        return $this->ownerAccount;
    }

    public function setOwnerAccount($ownerAccount)
    {
        $this->ownerAccount = $ownerAccount;
        $this->queryParameters["OwnerAccount"] = $ownerAccount;
    }
}
