#!/usr/bin/env bash
D=`dirname $0`/..
# DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

SCHEMADIRREL=${D}/schema
# print ${SCHEMADIRREL}
SCHEMADIR=`readlink -f $SCHEMADIRREL`

sed "s/__SCHEMADIR__/$SCHEMADIR/g" tests/slapd.conf.dist> tests/slapd.conf