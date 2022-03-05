from django.contrib import admin
from django.urls import path
from entrypoint.views import entrypoint

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', entrypoint),
]
