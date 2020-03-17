FROM mitmproxy/mitmproxy:latest

RUN mkdir requests
#WORKDIR /home/$USER/requests
COPY proxy.py .


EXPOSE 9003:8080

ENTRYPOINT ["/usr/bin/mitmdump", "-s", "./proxy.py", "--proxyauth", "test:pass"]
