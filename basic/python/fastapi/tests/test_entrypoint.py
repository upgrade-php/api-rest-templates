from debuger import debug
from fastapi.testclient import TestClient

from entrypoint import app

debug()
client = TestClient(app)

def test_read_main():
    response = client.get("/")
    assert response.status_code == 200
    assert response.json()['data'] == 'Hello Word'
