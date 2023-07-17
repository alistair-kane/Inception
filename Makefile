all : up

up : 
	@docker compose -f ./srcs/docker-compose.yml up -d --force-recreate

down : 
	@docker compose -f ./srcs/docker-compose.yml down

fclean :
	-docker stop $$(docker ps -qa)
	-docker rm $$(docker ps -qa)
	-docker rmi -f $$(docker images -qa)
	-docker volume rm $$(docker volume ls -q)
	-docker network rm $$(docker network ls -q) 2>/dev/null
	-docker system prune -af

	sudo rm -drf /home/alkane/data/mariadb
	sudo rm -drf /home/alkane/data/wordpress
	sudo rm -drf /home/alkane/data/site

	sudo mkdir -p /home/alkane/data/mariadb
	sudo mkdir -p /home/alkane/data/wordpress
	sudo mkdir -p /home/alkane/data/site

	sudo chmod 777 /home/alkane/data/mariadb
	sudo chmod 777 /home/alkane/data/wordpress
	sudo chmod 777 /home/alkane/data/site


stop : 
	@docker compose -f ./srcs/docker-compose.yml stop

start : 
	@docker compose -f ./srcs/docker-compose.yml start

status : 
	@docker ps
