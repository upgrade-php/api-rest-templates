up:
	docker-compose up
app:
	docker exec -it tmpl-django-rest-py bash

run_test:
	docker-compose run python python manage.py test entrypoint/

test:
	python manage.py test entrypoint/

debug:
	DEBUGGER=True python manage.py test entrypoint/