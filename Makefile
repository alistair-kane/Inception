all : up

up : 
	@docker-compose -f ./srcs/docker-compose.yml up -d --force-recreate

down : 
	@docker-compose -f ./srcs/docker-compose.yml down
	-docker stop $$(docker ps -qa)
	-docker rm $$(docker ps -qa)
	-docker rmi -f $$(docker images -qa)
	-docker volume rm $$(docker volume ls -q)
	-docker network rm $$(docker network ls -q) 2>/dev/null
	-docker system prune -af

# -sudo rm -rf /Users/alistair/data/mariadb/
# -sudo rm -rf /Users/alistair/data/wordpress/
# mkdir -p /Users/alistair/data/mariadb
# mkdir -p /Users/alistair/data/wordpress
#sudo chown -R $$USER:$$USER /Users/alistair/data/mariadb
#sudo chown -R $$USER:$$USER /Users/alistair/data/wordpress


stop : 
	@docker-compose -f ./srcs/docker-compose.yml stop

start : 
	@docker-compose -f ./srcs/docker-compose.yml start

status : 
	@docker ps
