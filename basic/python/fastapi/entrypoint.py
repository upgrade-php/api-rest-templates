from typing import Optional
from fastapi import FastAPI

app = FastAPI()

@app.get("/")
def entrypoint():
    return {
        "sucess": True,
        "data": "Hello Word"
    }