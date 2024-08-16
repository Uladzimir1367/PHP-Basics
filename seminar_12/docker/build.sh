#!/bin/bash
# shellcheck disable=SC2006

# Получение текущего пути
path=$(pwd)

# Проверка наличия аргумента
if [ -z "$1" ]; then
echo "Ошибка: Необходимо указать имя проекта."
exit 1
fi

project=$1

# Переход в текущую директорию и очистка экрана
cd "$path" && clear

# Сборка Docker-контейнеров
docker-compose -p "$project" --file "docker/docker-compose.yml" build