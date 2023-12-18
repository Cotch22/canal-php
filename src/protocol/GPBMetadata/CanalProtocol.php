<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CanalProtocol.proto

namespace GPBMetadata;

class CanalProtocol
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
CanalProtocol.proto com.alibaba.otter.canal.protocol"�
Packet
magic_number (H 
version (H:
type (2,.com.alibaba.otter.canal.protocol.PacketTypeD
compression (2-.com.alibaba.otter.canal.protocol.CompressionH
body (B
magic_number_presentB
version_presentB
compression_present"<
	HeartBeat
send_timestamp (
start_timestamp ("�
	Handshake 
communication_encoding (	H 
seeds (M
supported_compressions (2-.com.alibaba.otter.canal.protocol.CompressionB 
communication_encoding_present"�

ClientAuth
username (	
password (
net_read_timeout (H 
net_write_timeout (H
destination (	
	client_id (	
filter (	
start_timestamp (B
net_read_timeout_presentB
net_write_timeout_present"H
Ack

error_code (H 
error_message (	B
error_code_present"E
	ClientAck
destination (	
	client_id (	
batch_id ("=
Sub
destination (	
	client_id (	
filter (	"?
Unsub
destination (	
	client_id (	
filter (	"�
Get
destination (	
	client_id (	

fetch_size (
timeout (H 
unit (H
auto_ack (HB
timeout_presentB
unit_presentB
auto_ack_present".
Messages
batch_id (
messages ("S
Dump
journal (	
position (
	timestamp (H B
timestamp_present"J
ClientRollback
destination (	
	client_id (	
batch_id (*U
Compression
COMPRESSIONCOMPATIBLEPROTO2 
NONE
ZLIB
GZIP
LZF*�

PacketType
PACKAGETYPECOMPATIBLEPROTO2 
	HANDSHAKE
CLIENTAUTHENTICATION
ACK
SUBSCRIPTION
UNSUBSCRIPTION
GET
MESSAGES
	CLIENTACK
SHUTDOWN	
DUMP

	HEARTBEAT
CLIENTROLLBACKB1
 com.alibaba.otter.canal.protocolBCanalPacketHbproto3'
        , true);

        static::$is_initialized = true;
    }
}

