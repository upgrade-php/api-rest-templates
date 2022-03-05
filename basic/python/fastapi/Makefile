up:
	docker-compose up
app:
	docker exec -it tmpl-fastapi-py bash

run:
	uvicorn entrypoint:app --reload

debug:
	DEBUGGER=True pytest tests/test_entrypoint.py

test:
	pytest

install:
	pip install -r requirements.txt