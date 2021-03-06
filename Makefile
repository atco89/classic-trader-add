up:
	docker-compose -f ./docker/docker-compose.yaml up -d --build

down:
	docker-compose -f ./docker/docker-compose.yaml down

restart:
	docker-compose -f ./docker/docker-compose.yaml restart

kill:
	docker container rm -f database
	docker container rm -f webserver

clean:
	docker system prune -a --volumes

webserver:
	docker exec -it webserver bash