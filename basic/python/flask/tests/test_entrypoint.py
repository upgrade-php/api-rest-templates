import os
import unittest
from urllib import response
from debuger import debug
from entrypoint import app

class TestEntrypoint(unittest.TestCase):

    def setUp(self):
        self.client = app.test_client()

    def test_entrypoint(self):
        self.response = self.client.post('/')
        self.assertEqual(200, self.response.status_code)
        self.assertTrue('Hello Word' in self.response.json['data'])


if __name__ == "__main__":
    debug()
    unittest.main()