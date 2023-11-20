pipeline {
    agent any

    stages {

      stage('Build') {
            steps {
                sh 'docker build -t theti-image .'
            }
        }

      stage('Get Repo') {
            steps {
                sh 'sudo rm -r /var/jenkins_home/workspace/theti/*'
                git branch: 'main', url: 'https://github.com/aliamedioune/theti'
            }
        }
}








