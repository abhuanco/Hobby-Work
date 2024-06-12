HOST_LINUX='172.17.0.1'
HOST_MAC='host.docker.internal'
HOST_WINDOWS='172.24.176.1'

up:
	@HOST_INTERNAL=$(HOST_LINUX) docker compose up -d --build --remove-orphans

upw:
	@HOST_INTERNAL=$(HOST_WINDOWS) docker compose up -d --build --remove-orphans

upm:
	@HOST_INTERNAL=$(HOST_MAC) docker compose up -d --build --remove-orphans

down:
	@HOST_INTERNAL='' docker compose down --rmi all

restart:
	@HOST_INTERNAL='' docker compose restart
