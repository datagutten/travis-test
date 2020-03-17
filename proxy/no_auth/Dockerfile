FROM mitmproxy/mitmproxy:latest

RUN mkdir requests
WORKDIR /home/$USER/requests
COPY ./proxy.py .


EXPOSE 9002:8080

ENTRYPOINT ["/usr/bin/mitmdump", "-s", "./proxy.py"]
