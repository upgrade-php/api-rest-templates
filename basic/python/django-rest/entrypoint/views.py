from rest_framework.response import Response
from rest_framework.decorators import api_view
from django.http import JsonResponse

@api_view(['GET'])
def entrypoint(request):
    #return Response({'success':True, 'data':'Hello Word'})
    return JsonResponse({'success':True, 'data':'Hello Word'})