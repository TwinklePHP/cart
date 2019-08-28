#!/bin/sh

protoc --proto_path=../proto --php_out=../grpc/ ../proto/*.proto
