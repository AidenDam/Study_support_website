# Study Support Website
This is the source of the website to support the HaUI Informatics Olympiad.

## RUN
### Docker compose
- start
``` bash
docker compose up -d
```
- view log
``` bash
docker compose logs
```
- stop
``` bash
docker compose down
```
### Docker run
``` bash
docker run -it --rm -p 8000:80 aiden827/onlinejudge
```

Host app: http://localhost:8000/