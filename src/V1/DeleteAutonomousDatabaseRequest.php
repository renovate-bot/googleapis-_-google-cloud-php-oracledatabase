<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/oracledatabase/v1/oracledatabase.proto

namespace Google\Cloud\OracleDatabase\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for `AutonomousDatabase.Delete`.
 *
 * Generated from protobuf message <code>google.cloud.oracledatabase.v1.DeleteAutonomousDatabaseRequest</code>
 */
class DeleteAutonomousDatabaseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the resource in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     */
    protected $request_id = '';

    /**
     * @param string $name Required. The name of the resource in the following format:
     *                     projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}. Please see
     *                     {@see OracleDatabaseClient::autonomousDatabaseName()} for help formatting this field.
     *
     * @return \Google\Cloud\OracleDatabase\V1\DeleteAutonomousDatabaseRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the resource in the following format:
     *           projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *     @type string $request_id
     *           Optional. An optional ID to identify the request. This value is used to
     *           identify duplicate requests. If you make a request with the same request ID
     *           and the original request is still in progress or completed, the server
     *           ignores the second request. This prevents clients from
     *           accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Oracledatabase\V1\Oracledatabase::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the resource in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the resource in the following format:
     * projects/{project}/locations/{location}/autonomousDatabases/{autonomous_database}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional ID to identify the request. This value is used to
     * identify duplicate requests. If you make a request with the same request ID
     * and the original request is still in progress or completed, the server
     * ignores the second request. This prevents clients from
     * accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.field_info) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
