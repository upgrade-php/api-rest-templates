from flask import Flask, request
app = Flask(__name__)

@app.route('/', methods=["POST"])
def entrypoint():
    return {'sucesso': True, 'data': 'Hello Word'}

if __name__ == "__main__":
    app.run(debug=True)