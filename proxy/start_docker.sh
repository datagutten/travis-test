#!/usr/bin/env bash
PROXYDIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
echo $PROXYDIR
cp ${PROXYDIR}/proxy.py ${PROXYDIR}/auth
cp ${PROXYDIR}/proxy.py ${PROXYDIR}/no_auth

docker build ${PROXYDIR}/auth -t requests_proxy_auth
docker build ${PROXYDIR}/no_auth -t requests_proxy_no_auth

docker run -d -p 9003:8080 requests_proxy_auth:latest
docker run -d -p 9002:8080 requests_proxy_no_auth:latest
docker ps