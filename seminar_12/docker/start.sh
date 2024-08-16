#!/bin/bash
# shellcheck disable=SC2006

# Получение текущего пути
path=$(pwd)

# Проверка наличия аргументов
if [ -z "$1" ] || [ -z "$2" ]; then
echo "Ошибка: Необходимо указать имя проекта и имя контейнера."
exit 1
fi

project=$1
containerName=$2

# Переход в текущую директорию и очистка экрана
cd "$path" && clear

# Запуск Docker-контейнеров
docker-compose -p "$project" --file "docker/docker-compose.yml" up -d && clear

# Вход в контейнер
docker exec -it "$containerName" sh && clear

# Остановка и удаление контейнеров
docker-compose -p "$project" --file "docker/docker-compose.yml" down