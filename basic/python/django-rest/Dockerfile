FROM python:3 as local

ENV PYTHONPATH=/usr/src/app
ENV PYTHONUNBUFFERED=True
ENV APP_HOME=/usr/src/app
ENV PORT=8080

WORKDIR /usr/src/app

COPY . .
RUN pip install -r requirements.txt